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

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});
 
Route::get('/about', function () {
    return view('About', [
        "title" => "about", 
        "name" => "iis Khaerunnisa",
        "email" => "193040139.iis@mail.unpas.ac.id",
        "img" => "1.png"
    ]);
});
Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "iis khaerunnisa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Itaque nisi sapiente accusantium eveniet
            amet quasi impedit quisquam possimus ducimus perspiciatis ullam aliquid quia deleniti,
            incidunt ex, nihil nam doloribus voluptatibus suscipit! Tempora voluptatum quibusdam debitis explicabo quod placeat,
            ratione sint nisi molestiae ullam quae inventore. Cumque, beatae omnis cupiditate non,
            totam qui unde iusto harum ex enim labore a vel eaque placeat magnam blanditiis laborum sit aliquam corporis aut quam,
             ab expedita in quia.Ipsa quisquam sint possimus non aliquid!"

        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "khaerunnisa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Itaque nisi sapiente accusantium eveniet
            amet quasi impedit quisquam possimus ducimus perspiciatis ullam aliquid quia deleniti, incidunt ex,
             nihil nam doloribus voluptatibus suscipit! Tempora voluptatum quibusdam debitis explicabo quod placeat, 
             ratione sint nisi molestiae ullam quae inventore. Cumque, beatae omnis cupiditate non,
              totam qui unde iusto harum ex enim labore a vel eaque placeat magnam blanditiis laborum sit aliquam corporis aut quam,
               ab expedita in quia. Ipsa quisquam sint possimus non aliquid!"

        ],
        [
            "title" => "judul post ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "iis",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Itaque nisi sapiente accusantium eveniet
            amet quasi impedit quisquam possimus ducimus perspiciatis ullam aliquid quia deleniti, incidunt ex, nihil nam doloribus voluptatibus 
            suscipit! Tempora voluptatum quibusdam debitis explicabo quod placeat, ratione sint nisi molestiae ullam quae inventore. Cumque, beatae
             omnis cupiditate non, totam qui unde iusto harum ex enim labore a vel eaque placeat magnam blanditiis laborum sit aliquam corporis aut 
             quam, ab expedita in quia. Ipsa quisquam sint possimus non aliquid!"

        ]
    ];
    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});
 
 //halaman single post
 Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "iis khaerunnisa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Itaque nisi sapiente accusantium eveniet
            amet quasi impedit quisquam possimus ducimus perspiciatis ullam aliquid quia deleniti,
            incidunt ex, nihil nam doloribus voluptatibus suscipit! Tempora voluptatum quibusdam debitis explicabo quod placeat,
            ratione sint nisi molestiae ullam quae inventore. Cumque, beatae omnis cupiditate non,
            totam qui unde iusto harum ex enim labore a vel eaque placeat magnam blanditiis laborum sit aliquam corporis aut quam,
             ab expedita in quia.Ipsa quisquam sint possimus non aliquid!"

        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "khaerunnisa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Itaque nisi sapiente accusantium eveniet
            amet quasi impedit quisquam possimus ducimus perspiciatis ullam aliquid quia deleniti, incidunt ex,
             nihil nam doloribus voluptatibus suscipit! Tempora voluptatum quibusdam debitis explicabo quod placeat, 
             ratione sint nisi molestiae ullam quae inventore. Cumque, beatae omnis cupiditate non,
              totam qui unde iusto harum ex enim labore a vel eaque placeat magnam blanditiis laborum sit aliquam corporis aut quam,
               ab expedita in quia. Ipsa quisquam sint possimus non aliquid!"

        ],
        [
            "title" => "judul post ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "iis",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
            elit. Itaque nisi sapiente accusantium eveniet
            amet quasi impedit quisquam possimus ducimus perspiciatis ullam aliquid quia deleniti, incidunt ex, nihil nam doloribus voluptatibus 
            suscipit! Tempora voluptatum quibusdam debitis explicabo quod placeat, ratione sint nisi molestiae ullam quae inventore. Cumque, beatae
             omnis cupiditate non, totam qui unde iusto harum ex enim labore a vel eaque placeat magnam blanditiis laborum sit aliquam corporis aut 
             quam, ab expedita in quia. Ipsa quisquam sint possimus non aliquid!"

        ]
    ];
    $new_post = [];
    foreach($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});