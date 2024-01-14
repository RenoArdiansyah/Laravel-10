<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    private $type = 'category';

    public function index()
    {
        return \view('categories', [
            'title'   => 'Categoriey',
            'bodys'    => Category::all()

        ]);
    }

    public function show(Category $category)
    {
        // return view('category', [
        //     'category'  => $category->name,
        //     'posts'     => $category->posts,
        // ]);
        $posts = $category->posts;

        foreach ($posts as $post) {
            // Menggunakan Str::limit() untuk membatasi teks 'body'
            $post->body = Str::limit($post->body, $limit = 350, $end = '...');
        }
        return view('personallist', [
            'title'     => $category->name,
            'type'      =>  $this->type,  
            'posts'     => $posts->load('category', 'user')
        ]);

    }
}
