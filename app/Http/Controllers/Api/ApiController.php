<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ApiController extends Controller
{


    public function gettingTopPost()
    {
        return $top_posts = Post::leftJoin('view_counts', 'view_counts.post_id', '=', 'posts.post_id')
            ->where('posts.publish_status', true)
            ->orderBy('view_counts.views', 'DESC')
            ->limit(6)
            ->get();
    }

    public function gettingCategoryPost(Request $request)
    {

        //return $request['id'];
        /*  $query = Post::where('posts.publish_status', true)->whereJsonContains('blogs.category_id', '0');
          $categories = Category::where('parent_category', $request['id'])->get();

          if(count($categories)>0){
              foreach ($categories as $cat) {

                  $query->orWhereJsonContains('blogs.category_id', $cat->category_id);
              }
          }


          $top_posts = $query->limit($request['limit'])
              ->get();*/
        $categories = Category::where('parent_category', $request['id'])->pluck('category_id');

        //return $categories[2];
        $id = 13;
        $top_posts = Post::where('posts.publish_status', true)
            ->where('category_id', 'LIKE', '%' . $request['id'] . '%')
            /*  ->whereRaw('json_contains(category_id, \'["' . $request['id'] . '"]\')')*/
            /* ->whereJsonContains('category_id', $request['id'])*/
            ->limit($request['limit'])
            ->get();

        return [
            'status_code' => 200,
            'status' => "Successfully Retrieved",
            'result' => $top_posts
        ];

    }

    public function login(Request $request)
    {

        $email = $request['email'];
        $password = $request['password'];
        // attempt to do the login
        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            $request->session()->put('id', 1);
            $user = User::where('email', $email)->first();
            $request->session()->put('user_type', $user->user_type);

            return [
                'status_code' => 200,
                'status_message' => "Success",
            ];

        } else {

            return [
                'status_code' => 400,
                'status_message' => "Email or Password is wrong",
            ];


        }

    }

    public function registration(Request $request)
    {

        unset($request['_token']);
        $request['user_type'] = 3;
        $request['password'] = Hash::make($request['password']);
        $request['biography'] = "";


        try {
            User::create($request->all());
            $user = User::where('email', $request['email'])->first();
            Auth::login($user);

            return [
                'status_code' => 200,
                'status_message' => "Email or Password is wrong",
            ];
        } catch (\Exception $exception) {
            //return $exception->getMessage();
            return [
                'status_code' => 400,
                'status_message' => $exception->getMessage()
            ];
        }

    }
}
