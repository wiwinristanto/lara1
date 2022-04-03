<?php

namespace App\Models;



class Post
{
    private static $blog_posts =[
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
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quas in unde placeat hic libero, est non cupiditate assumenda numquam adipisci aliquid repudiandae harum fugiat ut pariatur nihil nisi recusandae voluptas molestias repellat quaerat possimus. Quis aperiam, eligendi illo aliquam laboriosam debitis, adipisci tenetur ea reprehenderit ipsa nesciunt sint consectetur libero officiis expedita aut sapiente delectus iusto dignissimos corporis ducimus? Quas voluptates, veniam unde doloremque dolorem dolore quam qui enim illo magnam commodi sequi saepe earum ab dicta officiis, non ut hic eos! Doloremque, unde eligendi corrupti praesentium veniam officiis numquam alias, eum ipsum aut sapiente amet velit facilis ipsa, autem porro magnam beatae a quam? Magnam recusandae commodi voluptate quibusdam nam possimus iure dolorum autem sapiente qui? Suscipit quo distinctio unde aut non pariatur molestias, nobis culpa iure harum beatae, minus dolore? Error tempora nesciunt molestias magnam alias perferendis aliquid ipsam, tenetur deserunt dolores repellat molestiae vero et adipisci.",
            "judul" => "web apps",
            "slug" => " judul-post-ke-dua",
        ],
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"]=== $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }
}
