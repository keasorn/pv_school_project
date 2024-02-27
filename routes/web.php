<?php

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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/posts', function () {
    $posts = [
        ['title' => 'Post 1', 'content' => 'Content for post 1'],
        ['title' => 'Post 2', 'content' => 'Content for post 2'],
        ['title' => 'Post 3', 'content' => 'Content for post 3'],
    ];

    return view('posts', ['posts' => $posts]);
});

Route::get('/products/{id}', function ($id) {
    $product = [
        'id' => $id,
        'name' => 'Product ' . $id,
        'description' => 'Description for product ' . $id,
        'price' => 100,
    ];

    return view('product',compact('product'));
});

Route::get('/home',function (){
   return view('front_end.home');
});
Route::get('/about',function (){
    return view('front_end.about');
});
Route::get('/contact',function (){
    return view('front_end.contact');
});
