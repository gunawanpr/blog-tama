<?php

namespace App\Models;

class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Gunawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, deserunt eius facere tempora consectetur ipsam quia similique excepturi iure quidem omnis ullam vitae perferendis quas, dicta tenetur impedit aperiam modi voluptate nobis soluta, at non. Sapiente dolor in dolorum voluptatem consequuntur sit, quam omnis vel voluptates porro deserunt temporibus ea minima facilis possimus beatae labore assumenda, voluptas quod perferendis adipisci? Voluptates provident error libero cupiditate, dicta tempora odit magnam accusantium natus nulla nobis quam minima laudantium culpa quas deleniti inventore."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dignissimos fugit sed magni necessitatibus repudiandae animi ducimus nulla veritatis perspiciatis vero, neque sunt blanditiis officia assumenda praesentium consectetur nobis maiores temporibus fuga eligendi mollitia. Officiis fuga distinctio id saepe itaque! Recusandae ad quam deserunt doloribus ab officiis necessitatibus nemo quas."
        ]

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
