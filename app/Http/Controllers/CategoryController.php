<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        $parent_categories = Category::where('parent_category', 0)->get();
        return view('admin.pages.category.create')->with('parent_categories', $parent_categories);
    }

    public function store(Request $request)
    {

        unset($request['_token']); //Remove Token
        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/category');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = "default.jpg";
        }
        $request->request->add(['category_image' => $image_name]);

        //return $request->all();

        try {
            Category::create($request->except('image'));
            return back()->with('success', "Category Saved");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }

    }


    public function show()
    {
         Category::get();
        //return Category::join('categories','categories.category_id','=','categories.parent_category')->get();
        return view('admin.pages.category.show')->with('categories', Category::get());
    }


    public function edit($id)
    {
        $parent_categories = Category::where('parent_category', 0)->get();
        return view('admin.pages.category.edit')->with('parent_categories', $parent_categories)->with('category', Category::where('category_id', $id)->first());
    }


    public function update(Request $request)
    {
        unset($request['_token']); //Remove Token
        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/category');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = $request['image'];
        }
        $request->request->add(['category_image' => $image_name]);

        //return $request->all();

        try {
            Category::where('category_id', $request['category_id'])->update($request->except('image'));
            return back()->with('success', "Category Saved");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }

    }


    public function destroy($id)
    {
        try {
            Category::where('category_id', $id)->delete();
            return back()->with('success', "Category Deleted");
        } catch (\Exception $exception) {
            return back()->with('success', $exception->getMessage());
        }
    }
}
