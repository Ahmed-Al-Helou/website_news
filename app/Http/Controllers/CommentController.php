<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('back.pages.details');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'comment' => 'required|max:100',
            'title' => 'required'
        ]);

        Comment::create([
            'comment' =>$request->comment,
            'name'=>auth()->user()->name,
            'email'=> auth()->user()->email,
            'title' => $request->title,
            'post_id' =>$request->post_id,
            'user_id' => auth()->user()->id
        ]);


        session()->flash('Add','Comment Add Successfully');
        return back();
        // return response()->json([
		// 	'status' => 200,
		// ]);
        // return response()->json(['message' => 'Comment added successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request,$id)
    // {
    //     return $request;
    // }




    public function update(Request $request,$id){


        $comment = Comment::where('id',$id)->first();

        $comment->update([
            'comment' =>$request->comment,
            'name'=>$request->name,
            'email'=> $request->email,
            'title' => $request->title,
        ]);

        session()->flash('edit','Comment has been Edited Successfully');
        return back();

    }

    public function destroy(Comment $comment)
    {

    }
}
