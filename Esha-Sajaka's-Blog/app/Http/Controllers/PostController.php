<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            'active' => 'blog',
            'title' => 'All Posts' . $title,
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get()
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
