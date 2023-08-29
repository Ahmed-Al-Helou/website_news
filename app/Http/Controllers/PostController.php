<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('front.Posts.show_all_posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('front.Posts.add_post',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|max:100',
            'img' => 'required'
        ]);

        $image = $request->file('img')->getClientOriginalName();
        $path_image = $request->file('img')->storeAs('Post',$image,'image');//storeAs('folder','nameImg','disk')

        Post::create([
            'title' => $request->title,
            'author' => $request->author,
            'date' => $request->date,
            'description' => $request->description,
            'category' => $request->category,
            'img' => $path_image
        ]);

        session()->flash('Add','Post has been added successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::where('id',$id)->first();
        $categories = Category::all();
        return view('front.Posts.edit_post',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $post = Post::find($id);

        $image = $request->file('img')->getClientOriginalName();
        $path_img = $request->file('img')->storeAs('Post',$image,'image');

        $post['img'] = 'imgs/'.$path_img;

        $post->update([
            'title' => $request->title,
            'author' => $request->author,
            'date' => $request->date,
            'description' => $request->description,
            'category' =>$request->category,
            'img' => $path_img
        ]);

        session()->flash('edit','Post has been edited successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */


    // public function delete(Request $request,$id){
    //     $post =Post::findorFail($id);
    //     $post->delete();
    //     Storage::disk('image')->delete($request->post->id.'/'.$request->post->img);
    //     session()->flash('delete','Post has been successfully');
    //     return back();
    // }


        // public function destroy(Request $request,$id){
        //     return $id;
        // }

        public function delete(){

        }

        // public function getCards($id){
        //     $posts = Post::where('category',$category)->get();
        //     return view('back.pages.cards',compact('posts'));
        // }
    }
