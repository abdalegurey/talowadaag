<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\posts\post;
use App\Models\views\views;
use Illuminate\Http\Request;
use App\Models\Comment\Comment;
use App\Models\following\following;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts= post::select()->orderBy("id","desc")->get();
        return view('home', compact("posts"));
    }

    public function writeposts(){
        $users= post::select()->get();
        
        
        return view("posts.create");
    }

    public function showPost($post_id){


        $post= post::find($post_id);
       
        $numberofcomments=comment::where("post_id",$post_id)->count();
        $comments= Comment::select()->orderBy("id","desc")->where("post_id",$post_id)->get();
        $posts= post::select()->orderBy("id","desc")->where('id', '!=' ,$post_id)->get();
        $numberoffollowing=following::where("post_id",$post_id)->count();
        $Numberviews=views::where("post_id",$post_id)->count();
        
        //getiing new views
        if(isset(Auth::user()->id)){
            // validating views
        $validatingviews=views::where('user_id',Auth::user()->id)->where("post_id",$post_id)->count();
        if($validatingviews==0){
            $views=views::create([
                "post_id"=>$post_id,
                "user_id"=>Auth::user()->id,
            ]);
        }
        }
        if(isset(Auth::user()->id)){
            //validating following
            $validatingFollowing=following::where('user_id',Auth::user()->id)->where("post_id",$post_id)->count();

        }
       

        return view("posts.show", compact("post", "comments","numberofcomments", "posts", "validatingFollowing", "numberoffollowing", "Numberviews"));



    }

    public function follow(Request $request, $id){
        $follow=following::create([

            "post_id"=>$id,
            "user_id"=>Auth::user()->id,
             "post_image"=>$request->image,
             "post_username"=>$request->username,
             "post_letter"=>$request->post,

           

        ]);

        if($follow){
            return redirect()->back();

        }



    }

    // public function readingcomment($post_id){

    //     $comments= Comment::select()->orderBy("id","desc")->take(8)->where("post_id",$post_id)->get();
    //     return view("posts.show", compact("comments"));

    // }

    public function create(Request $request){
        

        
        $Insertcomments= post::create([
           
            "post"=>$request->post,
            "image" =>Auth()->user()->image,
            "username"=>Auth()->user()->name,
           
        ]);

        if($Insertcomments){
            return redirect("home");
          

        }



    }

    public function insertComment(Request $request, $id){

        $insertComment=Comment::create([

            "post_id"=>$id,
            "user_name"=>Auth::user()->name,
            "image" =>Auth()->user()->image,
            "comment"=>$request->comment,

        ]);

        $insertComment->save();


        return redirect()->back();

    }


   

}
