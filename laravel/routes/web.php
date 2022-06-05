<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Models\post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "ruhul aco bagus",
        "kelas" => "VII",
        "email" => "ruhul123@gmail.com",
        "image" => "satu.jpg"
    ]);
});



Route::get('/post', function () {

    return view('post', [
        "title" => "post",
        "posts" => post::all()
    ]);
});


//halaman pertama post
Route::get('post/{slug}', function ($slug) {
    return view('posts', [
        "title" => "judul-post-pertama",
        "post" => post::find($slug)
    ]);
});
