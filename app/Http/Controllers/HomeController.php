<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\posts\post;
use Illuminate\Http\Request;
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
        
        
        return view("posts.create", compact("users"));
    }

    public function create(Request $request, $id){
        

        
        $Insertcomments= post::create([
            "user_id"=>$id,
            "post"=>$request->post,
            "image" =>Auth()->user()->image,
           
        ]);

        if($Insertcomments){
          return redirect()->route("home", $id)->back();
          

        }



    }
}
