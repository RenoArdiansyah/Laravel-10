<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/abouts', function () {
    return view('abouts', [
        'name'      => 'Muhammad Reno Ardiansyah',
        'email'     => 'reno75874@gmail.com',
        'img'       => 'img.png',
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show'] );

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

Route::get('/authors/{author:username}', [AuthorController::class, 'index']);