<?php

namespace App\Http\Controllers\News;

use App\Models\Tag;

class NewsControllerCreate
{
    public function __invoke()
    {
        $tags = Tag::all();
        return view('news.create', compact('tags'));
    }
}
