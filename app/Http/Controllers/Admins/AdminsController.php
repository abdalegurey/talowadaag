<?php

namespace App\Http\Controllers\Admins;

use App\Models\posts\post;
use App\Models\views\views;
use Illuminate\Http\Request;
use App\Models\Comment\Comment;
use App\Models\following\following;
use App\Http\Controllers\Controller;

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
}
