<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'active' => 'blog',
            'title' => 'All Posts',
            'posts' => Post::latest()->filter()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'active' => 'blog',
            'title' => 'Single Post',
            'post' => $post
        ]);
    }
}
