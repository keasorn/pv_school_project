<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function home(){
        return view('front_end.home');
    }
    function about(){
        return view('front_end.about');
    }
    function contact(){
        return view('front_end.contact');
    }
    function posts () {
    $posts = [
        ['title' => 'Post 1', 'content' => 'Content for post 1'],
        ['title' => 'Post 2', 'content' => 'Content for post 2'],
        ['title' => 'Post 3', 'content' => 'Content for post 3'],
    ];

    return view('posts', ['posts' => $posts]);
}
}
