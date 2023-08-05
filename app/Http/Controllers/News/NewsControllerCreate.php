<?php

namespace App\Http\Controllers\News;

class NewsControllerCreate
{
    public function __invoke()
    {
        return view('news.create');
    }
}
