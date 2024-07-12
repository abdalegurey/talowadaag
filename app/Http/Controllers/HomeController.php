<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\posts\post;
use Illuminate\Http\Request;
use App\Models\Comment\Comment;
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
       

        return view("posts.show", compact("post", "comments","numberofcomments", "posts"));



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
