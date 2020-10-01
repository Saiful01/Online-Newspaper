<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('admin.pages.advertisement.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Advertisement $advertisement)
    {
        $result=Advertisement::get();
        return view('admin.pages.advertisement.show')->with('result',$result);
    }


    public function edit($id)
    {
         $result=Advertisement::where('ad_id',$id)->first();
        return view('admin.pages.advertisement.edit')->with('result',$result);
    }


    public function update(Request $request)
    {
        //return $request->all();

        unset($request['_token']); //Remove Token

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/ad');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = $request['image'];
        }
        $request->request->add(['ad_image' => $image_name]);

        //return $request->all();

        try {
            Advertisement::where('ad_id', $request['ad_id'])->update($request->except('image'));
            return back()->with('success', "Advertisement Updated");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }


    public function destroy(Advertisement $advertisement)
    {
        //
    }
}
