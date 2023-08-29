<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Comment;
use App\Models\navigationPage;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $admin = Admin::latest()->first();
        // $post_slider = Post::orderBy('created_at' , 'desc')->limit(3)->get();
        // $post_right = Post::orderBy('created_at','desc')->limit(2)->get();
        $posts = Post::all();

        $post_slider=[];
        $post_right=[];
        $post_left_side = [];
        $post_right_side = [];
        $post_left_side2 = [];
        $post_left_side3 = [];
        $post_left_side4 = [];
        $post_most_recent = [];
        $post_most_recent2 = [];
        $post_most_popular = [];
        $post_trending = [];
        $post_weekly =[];

        $i=0;

        for($i=0 ; $i < 3; $i++){
            array_push($post_slider,$posts[$i]);
        }

        for($i=3; $i < 5; $i++){
                array_push($post_right, $posts[$i]);
            }

        // dd($post_left_side);
        for($i=5; $i < 6 ; $i++){
            array_push($post_left_side,$posts[$i]);
        }
        for($i=6 ; $i<7 ;$i++){
            array_push($post_left_side2,$posts[$i]);
        }

        for($i=7 ; $i < 8 ; $i++){
            array_push($post_left_side3,$posts[$i]);
        }

        for($i=8 ; $i < 9 ; $i++){
            array_push($post_left_side4,$posts[$i]);
        }
        // dd($post_left_side2);

        for($i = 10 ; $i < 14 ; $i++){
            array_push($post_right_side,$posts[$i]);
        }

        for($i=14; $i< 15; $i++){
            array_push($post_most_recent,$posts[$i]);
        }

        for($i=15; $i< 17; $i++){
            array_push($post_most_recent2,$posts[$i]);
        }

        for($i=17 ; $i < 21 ; $i++){
            array_push($post_most_popular,$posts[$i]);
        }
        for($i=21 ; $i < 25 ; $i++){
            array_push($post_trending,$posts[$i]);
        }

        for($i = 25 ; $i <30 ; $i++){
            array_push($post_weekly,$posts[$i]);
        }
        // dd($post_weekly);
        // dd($post_right_side);


        return view('back.pages.Home',
        compact('admin','posts', 'post_slider','post_right','post_left_side','post_right_side',
        'post_left_side2','post_left_side3','post_left_side4','post_most_recent',
        'post_most_recent2','post_most_popular','post_trending','post_weekly'));


    }

    // public function viewCard(){
    //     $posts = Post::all();
    //     $post_right_side = [];

    //     for($i = 10 ; $i < 14 ; $i++){
    //         array_push($post_right_side,$posts[$i]);
    //     }
    //     // dd($post_right_side);

    //     return view('back.pages.cards',compact('post_right_side'));
    // }

    public function showPost(){
        $posts = Post::all();
        $post_footer = [];
        $i =30;
        for($i=30 ; $i < 33 ; $i++){
            array_push($post_footer,$posts[$i]);
        }
        dd($post_footer);
        return view('back.layout.footer',compact('post_footer'));
    }

    public function viewAbout(){
        $admin = Admin::latest()->first();
        $posts = Post::all();
        $post_top = [];
        $post_team =[];
        $i = 33;
        for($i=33 ; $i < 34 ;$i++){
            array_push($post_top,$posts[$i]);
        }
        for($i =34 ; $i <37 ; $i++){
            array_push($post_team,$posts[$i]);
        }

        return view('back.pages.about',compact('admin','post_top','post_team'));
    }

    public function viewCategory(){
        $admin = Admin::latest()->first();
        $post_cardOne = Post::limit(6)->latest()->get();
        
        // dd($post_cardOne);
        return view('back.pages.categories',compact('admin','post_cardOne'));
    }

    public function viewLatestNews(){
        $admin = Admin::latest()->first();
        return view('back.pages.latest_news',compact('admin'));
    }

    public function viewBlog(){
        $admin = Admin::latest()->first();
        $posts = Post::all();
        $post_top2 = [];
        $post_recent2 = [];
        $post_recent2_1 = [];

        $i = 37;

        for($i=37 ; $i < 42 ; $i++){
            array_push($post_top2,$posts[$i]);
        }

        for($i=42; $i < 43 ; $i++){
            array_push($post_recent2,$posts[$i]);
        }
        for($i=43 ; $i < 46 ; $i++){
            array_push($post_recent2_1,$posts[$i]);
        }

        return view('back.pages.blog',compact('admin','post_top2','post_recent2','post_recent2_1'));
    }

    public function viewBlogDetails(){
        $admin = Admin::latest()->first();
        $posts =Post::all();
        $post_recent2 = [];
        $post_recent2_1 = [];

        for($i=42; $i < 43 ; $i++){
            array_push($post_recent2,$posts[$i]);
        }
        for($i=43 ; $i < 46 ; $i++){
            array_push($post_recent2_1,$posts[$i]);
        }

        return view('back.pages.blog_details',compact('admin','post_recent2','post_recent2_1'));
    }

    public function viewElement(){
        $admin = Admin::latest()->first();
        return view('back.pages.element',compact('admin'));
    }

    public function viewContact(){
        $admin = Admin::latest()->first();
        return view('back.pages.contact',compact('admin'));
    }

    // public function getCards($category){
    //     // $posts = Post::orderBy('created_at', 'desc')->paginate(4);
    //     // return $posts;
    // }

    public function show_details($id){
        $admin = Admin::latest()->first();
        $post = Post::where('id',$id)->first();
        $comments = Comment::all();
        return view('back.pages.details',compact('admin','post','comments'));
    }
}
