<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\AdminsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// routes/web.php
// routes/web.php




Route::get('/writePosts', [App\Http\Controllers\HomeController::class, 'writeposts'])->name('writeposts');
Route::post('/writePosts', [App\Http\Controllers\HomeController::class, 'create'])->name('create');

Route::get('/writePosts/{post_id}', [App\Http\Controllers\HomeController::class, 'showPost'])->name('showposts');
Route::post('/insertComment/{id}', [App\Http\Controllers\HomeController::class, 'insertComment'])->name('insertComment');
Route::post('/Follow/{id}', [App\Http\Controllers\HomeController::class, 'follow'])->name('follow');

Route::get('/likedshowspost', [App\Http\Controllers\Users\UserController::class, 'likedshowsposts'])->name('likedshowsposts')->middleware("auth:web");;

// Route::get('/readingcomments/{post_id}', [App\Http\Controllers\HomeController::class, 'readingcomment'])->name('readingComments');



//Adminpanel

Route::get('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'viewlogin'])->name('view.login')->middleware("CheckForAuth");

Route::post('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'checklogin'])->name('check.login');


Route::get('admin/register', [App\Http\Controllers\Admins\AdminsController::class, 'viewregister'])->name('view.register');

Route::group(["prefix"=>'admin', 'middleware'=>'auth:admin'], function(){
Route::get('index', [App\Http\Controllers\Admins\AdminsController::class, 'index'])->name('admins.dashboard');

//admin

Route::get('/AllAdmins', [App\Http\Controllers\Admins\AdminsController::class, 'Alladmin'])->name('admins.all');
Route::get('/createAdmins', [App\Http\Controllers\Admins\AdminsController::class, 'createAdmins'])->name('admins.create');
Route::post('/createAdmins', [App\Http\Controllers\Admins\AdminsController::class, 'storeAdmins'])->name('admins.store');


//posts

Route::get('/AllPosts', [App\Http\Controllers\Admins\AdminsController::class, 'Allposts'])->name('admins.posts');
Route::get('/Allposts/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deletePosts'])->name('posts.delete');






//comments


});