<?php

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
    return view('posts' , [
        'title' => 'From the blog' , 'posts' => [
            'title' => '',
            'author' => '',
            'body' => ''
        ],
        [
            'title' => '',
            'author' => '',
            'body' => ''
        ],
    ]);
});

Route::get('/contact', function () {
    return view('contact' , [

        'title' => 'Contact Me'
    ]);
});