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
}
