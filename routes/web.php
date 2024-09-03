<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/about', function () {
    return view('about' ,[ 
        'title' => 'About Me ',
        'name' => 'Raihanwp'

    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'From the blog',
        'posts' => Post::All()
    ]);
});

Route::get('/posts/{post:slug}' , function(Post $post){

    // $post = Post::find($slug);
    
    return view('post' , [
        'title' => 'single post',
        'post' => $post
    ]);

});


Route::get('/contact', function () {
    return view('contact' , [

        'title' => 'Contact Me'
    ]);
});