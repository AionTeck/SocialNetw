<?php

namespace App\Services;

use App\Models\Post;

class Service
{
    public function newsStore($request){
        $post = Post::create([
            'content'=>$request->content,
        ]);
        $post->save();
    }
}
