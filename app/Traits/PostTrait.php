<?php 


namespace App\Traits;
use App\Models\Post;

    trait PostTrait{
        public static function insertData($data){
            return Post::create($data);
        }

     
    }