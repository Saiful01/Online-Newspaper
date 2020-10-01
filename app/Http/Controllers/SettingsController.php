<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function show(Request $request)
    {
        $id = session('id');
        return view('admin.pages.setting.index')->with('result', User::where('id', $id)->first());
    }

    public function update(Request $request)
    {
        unset($request['_token']); //Remove Token
        $password = $request['password'];
        $password = Hash::make($password);
        $user_id = $request['id'];
        unset($request['password']);
        unset($request['id']);
        /*$request->validate([
            'user_name' => 'required|unique:categories'
        ]);*/


        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/user');
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = "default.jpg";
        }
        $request->request->add(['image_url' => $image_name]);

        //return $request->all();

        $request->request->add(['password' => $password]);
        //return $request->all();

        try {
            User::where('id', $user_id)->update($request->except('image'));
            return back()->with('success', "User Updated");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }

    }
}
