<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsControllerIndex extends Controller
{
    public function __invoke()
    {
        $data = Post::orderBy('id', 'DESC')->paginate(10);
        // выполнение сортировки по дате создания от новых к старым
        return view('news.index', compact('data'));
    }
}
