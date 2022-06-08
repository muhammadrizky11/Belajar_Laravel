<?php

use App\Models\post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostControler;
use App\Providers\RouteServiceProvider;
use App\Models\Category;
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
        "title" => "home",
        'active' => 'home',


    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "ruhul aco bagus",
        "kelas" => "VII",
        "email" => "ruhul123@gmail.com",
        "image" => "satu.jpg",
        'active' => 'about',
    ]);
});



Route::get('/post', [PostControler::class, 'index']);

//halaman pertama post
Route::get('post/{post:slug}', [PostControler::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'post categories',
        'active' => 'categories',
        'categories' => category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('post', [
        'title' => "Post By Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'autor'),

    ]);
});
Route::get('/autors/{autor:username}', function (User $autor) {
    return view('post', [
        'title' => "Post By Author : $autor->name",
        'posts' => $autor->post->load('category', 'autor'),
    ]);
});
