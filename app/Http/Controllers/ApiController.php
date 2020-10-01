<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    public function getNews(Request $request)
    {

        $result = Post::join('categories', 'categories.category_id', '=', 'posts.category_id')->limit(20)->orderBy('posts.post_id', 'DESC')->get();
        //echo json_encode($ar, JSON_UNESCAPED_UNICODE);
        return $data = [
            'status' => "success",
            'code' => 0,
            'message' => "Success",
            'news' => json_encode($result,JSON_UNESCAPED_UNICODE),
        ];
    }
}
