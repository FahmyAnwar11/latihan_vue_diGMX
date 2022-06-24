<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, sunt. Illo tenetur ea nobis dolorem consectetur provident iusto vitae quos voluptas incidunt et ut quam ratione eaque, nostrum dolorum maxime suscipit eligendi sit, nisi dignissimos blanditiis. Tenetur voluptatem aspernatur veniam animi sed hic aut modi ipsum. Mollitia, quam laborum dicta natus eaque cum unde nulla ab ratione iusto modi ex animi praesentium, non dolor nesciunt est, eos placeat? Et, pariatur?"  
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, sunt. Illo tenetur ea nobis dolorem consectetur provident iusto vitae quos voluptas incidunt et ut quam ratione eaque, nostrum dolorum maxime suscipit eligendi sit, nisi dignissimos blanditiis. Tenetur voluptatem aspernatur veniam animi sed hic aut modi ipsum. Mollitia, quam laborum dicta natus eaque cum unde nulla ab ratione iusto modi ex animi praesentium, non dolor nesciunt est, eos placeat? Et, pariatur?"  
        ]
        ];

        public static function all() 
        {
            return self::$blog_posts;
        }

        public static function find($slug)
        {
            $posts = self::$blog_posts;
            $post = [];
            foreach($posts as $p) {
                if($p["slug"] === $slug) {
                    $new_post = $p;
                }
        }
        return $post;
        }
}
