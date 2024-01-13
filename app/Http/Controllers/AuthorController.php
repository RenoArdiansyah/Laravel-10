<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User; // Pastikan model User sudah diimport

class AuthorController extends Controller
{
    private $type = 'author';

    public function index()
    {
        // Misalnya, kita mendapatkan user dengan ID 1
        $users = User::find(1);

        $posts = $users->posts->load('category', 'user');

        return view('posts', [
            'title' => $users->name, 
            'type'  => $this->type,
            'posts' => $posts->map(function ($post) {
                $post->body = Str::limit($post->body, 100);
                return $post;
            })
        ]);
    }
}