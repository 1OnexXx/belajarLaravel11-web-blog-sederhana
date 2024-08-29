<?php

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
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-article-1',
                'title' => 'Mental Hygiene for a Teenage Werewolf',
                'author' => 'Anthony M. Caro',
                'body' => 'Reviews and reference materials that refer to Was a Teenage Werewolf (1957) as a “campy” film are head-scratching. While the absurd Frankenstein follow-up had unintentional comedic elements, Michael Landon’s portrayal of the adolescent lycanthrope Tony Rivers conveys a dark and tragic tale. There’s little to laugh about when watching the teenage werewolf’s plight unfold because things didn’t have to turn out the way they did. Teenager Tony had his struggles and couldn’t overcome them because he didn’t listen to the adults who gave him good advice.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-article-2',
                'title' => 'The Intersection of Online Casinos and Horror Movies: A Spine-Chilling Fusion',
                'author' => 'Adrian Halen',
                'body' => 'The world of online casinos and horror movies might seem worlds apart, but both have captivated audiences with their unique blend of thrill and suspense. Online casinos offer the excitement of chance and strategy, while horror movies evoke fear and tension through suspenseful storytelling and eerie visuals. The intersection of these two seemingly disparate worlds has created a fascinating fusion.'
            ],
        ],
    ]);
});

Route::get('/posts/{slug}' , function($slug){

    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-article-1',
            'title' => 'Mental Hygiene for a Teenage Werewolf',
            'author' => 'Anthony M. Caro',
            'body' => 'Reviews and reference materials that refer to Was a Teenage Werewolf (1957) as a “campy” film are head-scratching. While the absurd Frankenstein follow-up had unintentional comedic elements, Michael Landon’s portrayal of the adolescent lycanthrope Tony Rivers conveys a dark and tragic tale. There’s little to laugh about when watching the teenage werewolf’s plight unfold because things didn’t have to turn out the way they did. Teenager Tony had his struggles and couldn’t overcome them because he didn’t listen to the adults who gave him good advice.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-article-2',
            'title' => 'The Intersection of Online Casinos and Horror Movies: A Spine-Chilling Fusion',
            'author' => 'Adrian Halen',
            'body' => 'The world of online casinos and horror movies might seem worlds apart, but both have captivated audiences with their unique blend of thrill and suspense. Online casinos offer the excitement of chance and strategy, while horror movies evoke fear and tension through suspenseful storytelling and eerie visuals. The intersection of these two seemingly disparate worlds has created a fascinating fusion.'
        ],
    ];

    $post = Arr::first($posts , function($post) use ($slug ){
        return $post['slug'] == $slug;
    });
    
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