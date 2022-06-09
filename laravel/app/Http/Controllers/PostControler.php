<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use App\Models\Category;

class PostControler extends Controller
{
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in' . $category->name;
        }

        // $posts = post::latest();

        // if (request('cari')) {
        //     $posts->where('title', 'like', '%' . request('cari') . '%')
        //         ->orWhere('body', 'like', '%' . request('cari') . '%');
        // }

        if (request('autor')) {
            $autor = User::firstWhere('username', request('autor'));
            $title = 'by' . $autor->name;
        }

        return view('post', [
            "title" => "All Post" . $title,
            "active" => 'post',
            // "posts" => post::all()
            "posts" => post::latest()->filter(request(['cari', 'category', 'autor']))->paginate(7)->withQuerystring()
            // kalu gak di tambahkan protected di post = with(['autor', 'category'])->get()awal nya di rubah paginate untuk menampilan beberapa saja withQuerystring buat bewa semua query sebelumnya di bawa ->
        ]);
    }

    public function show(post $post)
    {
        return view('posts', [
            "title" => "judul-post-pertama",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
