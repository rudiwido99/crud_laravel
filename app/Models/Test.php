<?php

namespace App\Models;

class Article
{
    private static $blog = [
                [
                    'judul' => 'Postingan Pertama',
                    'slug' => 'postingan-pertama',
                    'author' => 'Rudi Wido A',
                    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Fugit similique tempore animi! Reprehenderit dolorum eaque fuga repellendus sed accusamus deserunt!'
                ],
                [
                    'judul' => 'Postingan Kedua',
                    'slug' => 'postingan-kedua',
                    'author' => 'Feri Kurniawan',
                    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.Fugit similique tempore animi! Reprehenderit dolorum eaque fuga repellendus sed accusamus deserunt!'
                ]
        ];
    
    public static function all(){
        return collect(self::$blog);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
