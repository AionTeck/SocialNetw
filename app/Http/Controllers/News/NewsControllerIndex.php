<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\NewsFilter;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsControllerIndex extends Controller
{
    public function __invoke()
    {
        // выполнение сортировки по дате создания от новых к старым и пагинация
        $data = Post::orderBy('id', 'DESC')->paginate(10);
        return view('news.index', compact('data'));
    }
}
