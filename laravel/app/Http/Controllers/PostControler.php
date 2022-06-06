<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostControler extends Controller
{
    public function index()
    {
        return view('post', [
            "title" => "All Post",
            // "posts" => post::all()
            "posts" => post::with(['autor', 'category'])->latest()->get()
        ]);
    }
    public function show(post $post)
    {
        return view('posts', [
            "title" => "judul-post-pertama",
            "post" => $post
        ]);
    }
}
