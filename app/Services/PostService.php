<?php
namespace App\Services;

use App\Models\Post;

class PostService{
    public function createPost($data){
         Post::insertData($data);
    }

}