<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts'     => Post::full()
        ]);
    }

    public function showPost($slug)
    {
        return view('post', [
            'post'      => Post::single($slug)
        ]);
    }

    public function test()
    {
        $posts = Post::latest()->paginate(20);
        return \view('posts', \compact('posts'));
    }
}
