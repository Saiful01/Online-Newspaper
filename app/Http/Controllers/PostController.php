<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        if (Auth::check()) {
            return Redirect::to('/admin-home');
            echo "yes";
        } else {
            return Redirect::to('/login');
        }
    }




    public function create()
    {
        $categories = Category::get();
        return view('admin.pages.post.create')->with('categories', $categories);
    }


    public function store(Request $request)
    {

        libxml_use_internal_errors(true);

        /*return $request;*/
        $author_id = Auth::user()->id;
        unset($request['_token']); //Remove Token

        $validator = Validator::make($request->all(), [
            'post_headline' => 'required',
            'post_slug' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);

        if ($validator->fails()) {

            return back()->with('failed', "Please check your headline and featured image")->withInput();
        }
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/post');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = null;
        }
        $request->request->add(['post_featured_image' => $image_name]);
        $request->request->add(['author_id' => $author_id]);


        //Summernote

        // return $request['post_details'];
        $details = $this->getSummernoteValue($request['post_details']);
        $request->request->add(['post_details' => $details]);


        if ($request['pin_post'] == "on") {
            unset($request['pin_post']);
            $request->request->add(['pin_post' => 1]);
            $pin_post = 1;
        } else {
            unset($request['pin_post']);
            $request->request->add(['pin_post' => 0]);
            $pin_post = 0;
        }
        $request['category_id'] = json_encode($request['category_id']);


        $insert_array = array(
            'post_headline' => $request['post_headline'],
            'post_details' => $details,
            'category_id' => $request['category_id'],
            'post_tags' => $request['post_tags'],
            'post_featured_image' => $image_name,
            'author_id' => $request['author_id'],
            'pin_post' => $pin_post,
            'post_slug' => $request['post_slug']


        );

        //return $insert_array;
        try {
            Post::create($insert_array);
            return Redirect::to('/post/show')->with('success', "Post Saved");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }

    }


    public function show(Request $request)
    {

        // return Category::whereNotIn('parent_category', [0])->get();
        if ($request->method() == "POST") {
            $query = Post::orderBy('post_id', "DESC");
            if ($request['query'] != null) {
                $query = $query->where('post_headline', 'LIKE', '%' . $request['query'] . '%');
            }
            if ($request['category_id'] != "All") {
                 $id = $request['category_id'];
                $query = $query->whereRaw("JSON_CONTAINS(posts.category_id, '[$id]' )");
            }

            $results = $query->paginate(15);
        } else {
            $results = Post::join('users', 'users.id', '=', 'posts.author_id')
                ->orderBy('post_id', "DESC")
                ->paginate(15);
        }

        return view('admin.pages.post.show')
            /* ->with('categories',Category::whereNotIn('parent_category', [0])->get())*/
            ->with('categories', Category::get())
            ->with('posts', $results);
    }

    public function search(Request $request)
    {
//        return $request->all();
        // return Category::whereNotIn('parent_category', [0])->get();
        return view('admin.pages.post.show')
            /* ->with('categories',Category::whereNotIn('parent_category', [0])->get())*/
            ->with('categories', Category::get())
            ->with('posts',
                Post::where('category_id', 'LIKE', '%' . $request['id'] . '%')
                    ->orderBy('post_id', "DESC")
                    ->paginate(15));
    }


    public function details($id)
    {
        $post = Post::where('post_id', $id)->first();
        $categories = Category::get();
        return view('admin.pages.post.details')
            ->with('categories', $categories)
            ->with('post', $post);
    }

    public function edit($id)
    {

        libxml_use_internal_errors(true);

        $post = Post::where('post_id', $id)->first();
        $categories = Category::get();
        return view('admin.pages.post.edit')
            ->with('categories', $categories)
            ->with('post', $post);
    }


    public function update(Request $request)
    {
        libxml_use_internal_errors(true);

        //return $request->all();
        $author_id = Auth::user()->id;
        unset($request['_token']); //Remove Token

        $validator = Validator::make($request->all(), [
            'post_headline' => 'required',
            'post_slug' => 'required',
            'category_id' => 'required',
            'post_details' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('failed', "Please check your headline and featured image");
        }


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/post');
            $image->move($destinationPath, $image_name);
            $request->request->add(['post_featured_image' => $image_name]);
        }

        $request->request->add(['author_id' => $author_id]);

        // return $request['post_details'];
        $details = $this->getSummernoteValue($request['post_details']);
        $request->request->add(['post_details' => $details]);

        $post_id = $request['post_id'];
        if ($request['pin_post'] == "on") {
            unset($request['pin_post']);
            $request->request->add(['pin_post' => 1]);
        } else {
            unset($request['pin_post']);
            $request->request->add(['pin_post' => 0]);
        }

        if ($request['pin_post'] == "on") {
            unset($request['pin_post']);
            $request->request->add(['pin_post' => 1]);
            $pin_post = 1;
        } else {
            unset($request['pin_post']);
            $request->request->add(['pin_post' => 0]);
            $pin_post = 0;
        }
        $request['category_id'] = json_encode($request['category_id']);

        unset($request['post_id']);

        try {
            Post::where('post_id', $post_id)->update($request->except('image'));
            return Redirect::to('/post/show')->with('success', "Post Updated");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            Post::where('post_id', $id)->delete();
            return back()->with('success', "Post Deleted");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }

    }

    public function pin($id)
    {
        try {
            Post::where('post_id', $id)->update(array('pin_post' => 1));
            return back()->with('success', "Post Pinned");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }

    }

    public function unPin($id)
    {
        try {
            Post::where('post_id', $id)->update(array('pin_post' => 0));
            return back()->with('success', "Post Unpinned");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }

    }

    public function draft($id)
    {
        try {
            Post::where('post_id', $id)->update(array('publish_status' => 0));
            return Redirect::to('/post/show')->with('success', "Post Drafted");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }

    }

    public function publish($id)
    {
        try {
            Post::where('post_id', $id)->update(array('publish_status' => 1));
            return Redirect::to('/post/show')->with('success', "Post Published");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }

    }

    private function getSummernoteValue($input_value)
    {

        $detail = $input_value;

        $dom = new \domdocument();
        //$dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $dom->loadHTML(mb_convert_encoding($detail, 'HTML-ENTITIES', 'UTF-8'));

        $images = $dom->getelementsbytagname('img');

        try {
            foreach ($images as $k => $img) {
                $data = $img->getattribute('src');

                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);

                $data = base64_decode($data);
                $image_name = time() . $k . '.png';
                $path = public_path() . '/images/post/' . $image_name;

                file_put_contents($path, $data);

                $img->removeattribute('src');
                $img->setattribute('src', '/images/post/' . $image_name);
            }
        } catch (\Exception $e) {

        }

        $detail = $dom->savehtml();
        return $detail;
    }
}
