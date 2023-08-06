<?php

namespace App\Http\Controllers\News;

use App\Http\Requests\News\NewsStore;
use Illuminate\Support\Facades\Auth;

class NewsControllerStore extends BaseController
{
    public function __invoke(NewsStore $request)
    {
        $request->validated();
        $this->service->newsStore($request);

        return redirect('/news');
    }
}
