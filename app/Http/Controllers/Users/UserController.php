<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Models\following\following;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function likedshowsposts (){

        

        $likedShows= following::select()->orderBy("id", "desc")->where("user_id", Auth::user()->id)->get();

       




        return view("posts.likedshowsposts", compact("likedShows"));

    }
}
