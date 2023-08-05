<?php

namespace App\Http\Controllers\News;

use App\Http\Requests\Request\NewsStore;

class NewsControllerStore extends BaseController
{
    public function __invoke(NewsStore $request)
    {
        $request->validated();
        $this->service->newsStore($request);

        return redirect('/news');
    }
}
