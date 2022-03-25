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
    return view('home',[
        "title"=>"Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title"=>"About",
        "anime"=> "Date a Live",
        "nama"=> "Kurumi Tokisaki",
        "umur"=> "17",
        "status"=> "waifu",
        "gambar"=>"background.png"
    ]);
});

Route::get('/blog', function () {
    $blogs = [
        [
            "title"=>"Blog Pertama",
            "slug"=>"blog-pertama",
            "author"=>"Katou Megumi ",
            "isi"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Tempora eius voluptatem omnis veritatis atque? Nesciunt animi quibusdam ea aliquam nemo?"
        ],
        [
            "title"=>"Blog Kedua",
            "slug"=>"blog-kedua",
            "author"=>"Kirara Bernstein",
            "isi"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Tempora eius voluptatem omnis veritatis atque? Nesciunt animi quibusdam ea aliquam nemo?"
        ]
        ];
    return view('/blog',[
        "title"=>"Blog",
        "blogs"=>$blogs
    ]);
});
Route::get('posts/{slug}',function($slug){
    $blogs = [
        [
            "title"=>"Blog Pertama",
            "slug"=>"blog-pertama",
            "author"=>"Katou Megumi ",
            "isi"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Tempora eius voluptatem omnis veritatis atque? Nesciunt animi quibusdam ea aliquam nemo?"
        ],
        [
            "title"=>"Blog Kedua",
            "slug"=>"blog-kedua",
            "author"=>"Kirara Bernstein",
            "isi"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Tempora eius voluptatem omnis veritatis atque? Nesciunt animi quibusdam ea aliquam nemo?"
        ]
        ];
        $new_post = [];
        foreach($blogs as $blog){
            if($blog['slug']==="slug"){
                $new_post = $blog;
            }
        }
    return view('post',[
        "title"=>"Single Blog",
        "post"=>$new_post
    ]);
});
