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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view("home");
// });


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Wiwin Ristanto",
        "email" => "wiiwn@stha.com",
        "image" => "img_2.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_post= [
        [
            "title" => "Judul Post ke 1",
            "author" => "Wiwin R",
            "judul" => "web apps",
            "slug" => " judul-post-ke-satu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quas in unde placeat hic libero, est non cupiditate assumenda numquam adipisci aliquid repudiandae harum fugiat ut pariatur nihil nisi recusandae voluptas molestias repellat quaerat possimus. Quis aperiam, eligendi illo aliquam laboriosam debitis, adipisci tenetur ea reprehenderit ipsa nesciunt sint consectetur libero officiis expedita aut sapiente delectus iusto dignissimos corporis ducimus? Quas voluptates, veniam unde doloremque dolorem dolore quam qui enim illo magnam commodi sequi saepe earum ab dicta officiis, non ut hic eos! Doloremque, unde eligendi corrupti praesentium veniam officiis numquam alias, eum ipsum aut sapiente amet velit facilis ipsa, autem porro magnam beatae a quam? Magnam recusandae commodi voluptate quibusdam nam possimus iure dolorum autem sapiente qui? Suscipit quo distinctio unde aut non pariatur molestias, nobis culpa iure harum beatae, minus dolore? Error tempora nesciunt molestias magnam alias perferendis aliquid ipsam, tenetur deserunt dolores repellat molestiae vero et adipisci."
        ],
        [
            "title" => "Judul Post ke 2 ",
            "author" => "Anzu HZ",
            "judul" => "web apps",
            "slug" => " judul-post-ke-dua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quas in unde placeat hic libero, est non cupiditate assumenda numquam adipisci aliquid repudiandae harum fugiat ut pariatur nihil nisi recusandae voluptas molestias repellat quaerat possimus. Quis aperiam, eligendi illo aliquam laboriosam debitis, adipisci tenetur ea reprehenderit ipsa nesciunt sint consectetur libero officiis expedita aut sapiente delectus iusto dignissimos corporis ducimus? Quas voluptates, veniam unde doloremque dolorem dolore quam qui enim illo magnam commodi sequi saepe earum ab dicta officiis, non ut hic eos! Doloremque, unde eligendi corrupti praesentium veniam officiis numquam alias, eum ipsum aut sapiente amet velit facilis ipsa, autem porro magnam beatae a quam? Magnam recusandae commodi voluptate quibusdam nam possimus iure dolorum autem sapiente qui? Suscipit quo distinctio unde aut non pariatur molestias, nobis culpa iure harum beatae, minus dolore? Error tempora nesciunt molestias magnam alias perferendis aliquid ipsam, tenetur deserunt dolores repellat molestiae vero et adipisci."
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});

//halaman Single Post
Route::get('posts/{slug}', function($slug) {
    $blog_post= [
        [
            "title" => "Judul Post ke 1",
            "author" => "Wiwin R",
            "judul" => "web apps",
            "slug" => " judul-post-ke-satu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quas in unde placeat hic libero, est non cupiditate assumenda numquam adipisci aliquid repudiandae harum fugiat ut pariatur nihil nisi recusandae voluptas molestias repellat quaerat possimus. Quis aperiam, eligendi illo aliquam laboriosam debitis, adipisci tenetur ea reprehenderit ipsa nesciunt sint consectetur libero officiis expedita aut sapiente delectus iusto dignissimos corporis ducimus? Quas voluptates, veniam unde doloremque dolorem dolore quam qui enim illo magnam commodi sequi saepe earum ab dicta officiis, non ut hic eos! Doloremque, unde eligendi corrupti praesentium veniam officiis numquam alias, eum ipsum aut sapiente amet velit facilis ipsa, autem porro magnam beatae a quam? Magnam recusandae commodi voluptate quibusdam nam possimus iure dolorum autem sapiente qui? Suscipit quo distinctio unde aut non pariatur molestias, nobis culpa iure harum beatae, minus dolore? Error tempora nesciunt molestias magnam alias perferendis aliquid ipsam, tenetur deserunt dolores repellat molestiae vero et adipisci."
        ],
        [
            "title" => "Judul Post ke 2 ",
            "author" => "Anzu HZ",
            "judul" => "web apps",
            "slug" => " judul-post-ke-dua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quas in unde placeat hic libero, est non cupiditate assumenda numquam adipisci aliquid repudiandae harum fugiat ut pariatur nihil nisi recusandae voluptas molestias repellat quaerat possimus. Quis aperiam, eligendi illo aliquam laboriosam debitis, adipisci tenetur ea reprehenderit ipsa nesciunt sint consectetur libero officiis expedita aut sapiente delectus iusto dignissimos corporis ducimus? Quas voluptates, veniam unde doloremque dolorem dolore quam qui enim illo magnam commodi sequi saepe earum ab dicta officiis, non ut hic eos! Doloremque, unde eligendi corrupti praesentium veniam officiis numquam alias, eum ipsum aut sapiente amet velit facilis ipsa, autem porro magnam beatae a quam? Magnam recusandae commodi voluptate quibusdam nam possimus iure dolorum autem sapiente qui? Suscipit quo distinctio unde aut non pariatur molestias, nobis culpa iure harum beatae, minus dolore? Error tempora nesciunt molestias magnam alias perferendis aliquid ipsam, tenetur deserunt dolores repellat molestiae vero et adipisci."
        ],
    ];

    $new_post = [];
    foreach($blog_post as $post){
        if($post["slug"]=== $slug){
            $new_post = $post;
        }
    }
       return view('post', [
        "title" => "single post",
        "post" => $new_post
       
    ]);
});
