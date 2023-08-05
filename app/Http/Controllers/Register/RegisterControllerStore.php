<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterStore;
use Illuminate\Http\Request;

class RegisterControllerStore extends BaseController
{
    public function __invoke(RegisterStore $request)
    {
        $request->validated();

        $this->service->RegisterStore($request);
        return view('home.index');
    }
}
