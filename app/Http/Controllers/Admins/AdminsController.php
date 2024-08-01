<?php

namespace App\Http\Controllers\Admins;

use App\Models\posts\post;
use App\Models\Admin\Admin;
use App\Models\views\views;
use Illuminate\Http\Request;
use App\Models\Comment\Comment;
use App\Models\following\following;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminsController extends Controller
{
    //

    public function viewlogin(){

        return view('admins.login');
    }

    public function viewregister(){

        return view('admins.register');
    }

    public function index(){


        $post=post::count();
        $comment= Comment::count();
        $views= views::count();
        $following=following::count();

        return view('admins.index', compact('post', 'comment', "views", "following"));

    }


    public function checklogin(Request $request){

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            
            return redirect() -> route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);

    }


    public function Alladmin(){
        $admins=Admin::all();
        return view('admins.alladmin', compact('admins'));
    }


    public function createAdmins(){

        return view("admins.createAdmins");
    }

    public function storeAdmins(Request $request){

        $storeAdmin=Admin::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=> Hash::make($request->password),
        ]);

        if($storeAdmin){
           return  Redirect::route("admins.all");
        }


        return view("admins.createAdmins", compact("storeAdmin"));
    }

    public function deleteAdmin($id){
        $admin=Admin::find($id);
        $admin->delete();
        return redirect()->route("admins.all");
    }

    public function Allposts(){
        $posts=post::all();
        return view('admins.posts', compact('posts'));

    }


    public function deletePosts($id){
        $posts=post::find($id);
        $posts->delete();
        return redirect()->back();
    }

    public function Allcomments(){
        $Comments=Comment::all();
        return view('admins.comments', compact('Comments'));

    }

    public function deleteComments($id){
        $comments=Comment::find($id);
        $comments->delete();
        return redirect()->back();
    }
}
