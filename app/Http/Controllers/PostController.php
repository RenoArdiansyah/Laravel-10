<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts  = Post::latest()->Filter(Request(['search', 'category', 'author']))->paginate(7);

        return view('posts', [
            'posts' => $posts
        ]);
    }
    public function show(Post $post)
    {
        return \view('post', [
            'post'  => $post
        ]);
    }
}
