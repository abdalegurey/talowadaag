<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/readingcomments/{post_id}', [App\Http\Controllers\HomeController::class, 'readingcomment'])->name('readingComments');



