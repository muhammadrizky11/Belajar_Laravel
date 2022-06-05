<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostControler extends Controller
{
    public function index()
    {
        return view('post', [
            "title" => "post",
            "posts" => post::all()
        ]);
    }
    public function show($slug)
    {
        return view('posts', [
            "title" => "judul-post-pertama",
            "post" => post::find($slug)
        ]);
    }
}
