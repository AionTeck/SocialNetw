<?php

namespace App\Http\Controllers\News;

use App\Http\Requests\News\NewsStore;
use Illuminate\Support\Facades\Auth;

class NewsControllerStore extends BaseController
{
    public function __invoke(NewsStore $request)
    {
        // Валидация данных в отдельном запросе
        $request->validated();
        // Работа с данными в методе newsStore класса Service
        $this->service->newsStore($request);

        return redirect('/news');
    }
}
