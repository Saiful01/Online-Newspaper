<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
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

        //return $request->all();
        $user_id = 1;
        //session('id');
        unset($request['_token']); //Remove Token
        $request->request->add(['user_id' => $user_id]);
        try {
            Comment::create($request->all());
            return back()->with('success', "Comment Saved");
        } catch (\Exception $exception) {
            return $exception->getMessage();back()->with('failed', $exception->getMessage());
        }


    }


    public function show(Comment $comment)
    {
        $result = Comment::join('users', 'users.id', '=', 'comments.user_id')
            ->limit(300)
            ->orderBy('comments.comment_id')
            ->get();
        return view('admin.pages.comment.show')
            ->with('results', $result);

    }


    public function edit(Comment $comment)
    {
        //
    }


    public function update(Request $request, Comment $comment)
    {
        //
    }

    public function destroy($id)
    {
        try{
            Comment::where('comment_id',$id)->delete();
            return back()->with('success', "Comment Deleted");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }

    public function spam($id)
    {
        try{
            Comment::where('comment_id',$id)->update(['approve_status'=>false]);
            return back()->with('success', "Comment Spam");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }
    public function publish($id)
    {
        try{
            Comment::where('comment_id',$id)->update(['approve_status'=>true]);
            return back()->with('success', "Comment Spam");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }
}
