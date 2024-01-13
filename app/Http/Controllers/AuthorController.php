<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User; // Pastikan model User sudah diimport

class AuthorController extends Controller
{
    private $type = 'author';

    public function index()
    {
        // Misalnya, kita mendapatkan user dengan ID 1
        $user = User::find(1);

        return view('personallist', [
            'title' => $user->name, // Menampilkan nama user
            'type'  => $this->type,
            'posts' => $user->posts->load('category', 'user') // Menampilkan semua post dari user
        ]);
    }
}