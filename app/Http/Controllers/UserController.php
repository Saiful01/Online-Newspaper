<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //
    }


    public function create()
    {
        return view('admin.pages.user.create');
    }

    public function store(Request $request)
    {

        unset($request['_token']); //Remove Token
        $password = $request['password'];
        $password = Hash::make($password);
        unset($request['password']); //Remove Token
        /*$request->validate([
            'user_name' => 'required|unique:categories'
        ]);*/

        /* if ($request->hasFile('image')) {
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
         $request->request->add(['user_image' => $image_name]);*/

        //return $request->all();

        $request->request->add(['password' => $password]);
        //return $request->all();

        try {
            User::create($request->all());
            return back()->with('success', "User Saved");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('failed', $exception->getMessage());
        }

    }


    public function show()
    {

        return view('admin.pages.user.show')->with('users', User::get());
    }


    public function edit($id)
    {
       // return User::where('id',$id)->first();
         return view('admin.pages.user.edit')->with('result', User::where('id',$id)->first());
    }


    public function update(Request $request)
    {

        unset($request['_token']); //Remove Token
        $password = $request['password'];
        $password = Hash::make($password);
        $user_id=$request['id'];
        unset($request['password']);
        unset($request['id']);
        /*$request->validate([
            'user_name' => 'required|unique:categories'
        ]);*/

        /* if ($request->hasFile('image')) {
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
         $request->request->add(['user_image' => $image_name]);*/

        //return $request->all();

        $request->request->add(['password' => $password]);
        //return $request->all();

        try {
            User::where('id',$user_id)->update($request->all());
            return back()->with('success', "User Updated");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }

    }


    public function destroy($id)
    {
        try {
            User::where('id', $id)->delete();
            return back()->with('success', "User Deleted");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }
}
