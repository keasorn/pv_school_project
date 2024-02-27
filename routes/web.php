<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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

Route::get('/posts', [FrontendController::class, 'posts']);

Route::get('/products/{id}', function ($id) {
    $product = [
        'id' => $id,
        'name' => 'Product ' . $id,
        'description' => 'Description for product ' . $id,
        'price' => 100,
    ];

    return view('product',compact('product'));
});

Route::get('/home',[FrontendController::class, 'home']);
Route::get('/about','App\Http\Controllers\FrontendController@about');
Route::get('/contact',[FrontendController::class, 'contact']);
