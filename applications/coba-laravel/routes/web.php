<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fahmy Anwar Hidayat",
        "email" => "fahmyanwar12@gmail.com",
        "image" => "gb.jpg"
    ]);
});


Route::get('/posts', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog"
    ]);
});


// Halaman Single Post
Route::get('posts/{slug}', function($slug) {
    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});