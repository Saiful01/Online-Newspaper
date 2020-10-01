<?php

namespace App\Http\Controllers;

use App\Exhibition;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.exhibition.create');
    }

    public function store(Request $request)
    {
        unset($request['_token']); //Remove Token
        $request->validate([
            'exhibition_title' => 'required',
            'exhibition_description' => 'required',
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
        $request->request->add(['exhibition_image' => $image_name]);

        //return $request->all();

        try {
            Exhibition::create($request->except('image'));
            return back()->with('success', "Exhibition Saved");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }

    public function show(Exhibition $exhibition)
    {
        Exhibition::get();
        //return Exhibition::join('categories','categories.category_id','=','categories.parent_category')->get();
        return view('admin.pages.exhibition.show')->with('exhibitions', Exhibition::get());
    }


    public function edit(Exhibition $exhibition)
    {
        return "edit page";
    }

    public function update(Request $request, Exhibition $exhibition)
    {
        //
    }


    public function destroy($id)
    {
        try{
            Exhibition::where('exhibition_id',$id)->delete();
            return back()->with('success', "Exhibition Deleted");
        } catch (\Exception $exception) {
            return back()->with('success', $exception->getMessage());
        }
    }
}
