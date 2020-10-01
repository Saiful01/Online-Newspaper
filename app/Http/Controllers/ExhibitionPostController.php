<?php

namespace App\Http\Controllers;

use App\Category;
use App\Exhibition;
use App\ExhibitionPost;
use App\Menu;
use Illuminate\Http\Request;

class ExhibitionPostController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.pages.exhibition_post.create')->with('exhibitions', Exhibition::get());
    }


    public function store(Request $request)
    {
        $author_id = session('id');
        unset($request['_token']); //Remove Token
        $request->validate([
            'exhibition_post_headline' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/exhibition');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = "default.jpg";
        }
        $request->request->add(['exhibition_post_featured_image' => $image_name]);
        $request->request->add(['author_id' => $author_id]);

        //return $request->all();

        try {
            ExhibitionPost::create($request->except('image'));
            return back()->with('success', "Exhibition Post Saved");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }
    }


    public function show(ExhibitionPost $exhibitionPost)
    {
        //return ExhibitionPost::get();
        //return Exhibition::join('categories','categories.category_id','=','categories.parent_category')->get();
        return view('admin.pages.exhibition_post.show')->with('exhibitionPost', ExhibitionPost::join('exhibitions','exhibitions.exhibition_id','=','exhibition_posts.exhibition_id')->get());
    }


    public function edit(ExhibitionPost $exhibitionPost)
    {
        //
    }


    public function update(Request $request, ExhibitionPost $exhibitionPost)
    {
        //
    }


    public function destroy($id)
    {
        try{
            ExhibitionPost::where('exhibition_post_id',$id)->delete();
            return back()->with('success', "Exhibition Post Deleted");
        } catch (\Exception $exception) {
            return back()->with('success', $exception->getMessage());
        }
    }
    public function details($id)
    {
        $navbar = Menu::join('categories', 'categories.category_id', '=', 'menus.category_id')->get();

        return $post =  $post = Exhibition::where('exhibition_id', $id)
            ->first();
        $selected_navbar = Menu::join('categories', 'categories.category_id', '=', 'menus.category_id')->get();


        return view('general.details')
            ->with('all', $navbar)
            ->with('post', $post)
            ->with('navbars', $selected_navbar);
    }
}
