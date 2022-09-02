<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;



class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "List Buku" . $title,
            "active" => 'posts',
            "posts" =>  Post::latest()->filter(request(['search', 'category', 'author', 'penulis', 'tanggal_rilis', 'halaman', 'bahasa']))->paginate(12)->withQueryString()

        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
