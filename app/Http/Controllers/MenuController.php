<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Menu $menu)
    {
        $result = Category::get();
        $menu=Menu::get();
        return view('admin.pages.menu.show')
            ->with('menu', $menu)
            ->with('result', $result);
    }


    public function edit(Menu $menu)
    {
        //
    }


    public function update(Request $request, Menu $menu)
    {
        //return $request->all();
        Menu::truncate();
        $menu_array=array();
        $menu = $request['menu'];
        foreach ($menu as $m) {
            Menu::create(array('category_id'=>$m));
            echo "dpopne";
        }

        return back()->with('success', "Menu Updated");
    }


    public function destroy(Menu $menu)
    {
        //
    }
}
