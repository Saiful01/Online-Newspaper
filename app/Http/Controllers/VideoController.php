<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
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
        return view('admin.pages.video.create');
    }

    public function store(Request $request)
    {
        $author_id = session('id');
        $request->request->add(['author_id' => $author_id]);
        unset($request['_token']); //Remove Token
        try {
            Video::create($request->all());
            return back()->with('success', "Video Saved");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }


    public function show(Video $video)
    {
        return view('admin.pages.video.show')->with('videos', Video::get());

    }


    public function edit($id)
    {
        return view('admin.pages.video.edit')->with('video', Video::where('video_id', $id)->first());
    }


    public function update(Request $request)
    {
        unset($request['_token']); //Remove Token
        $id = $request['video_id'];
        try {
            Video::where('video_id', $id)->update($request->all());
            return back()->with('success', "Video Updated");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            Video::where('video_id', $id)->delete();
            return back()->with('success', "Video Saved");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }
}
