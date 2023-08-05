<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsControllerIndex extends Controller
{
    public function __invoke()
    {
        $posts = new Post;
        return view('news.index', ['data' => $posts->orderBy('created_at', 'desc')->get()]);
    }
}
