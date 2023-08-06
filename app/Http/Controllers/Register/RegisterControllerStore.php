<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterStore;
use Illuminate\Http\Request;

class RegisterControllerStore extends BaseController
{
    public function __invoke(RegisterStore $request)
    {
        //Передача файлов в отедльный запрос и последующая валидация,
        // после чего в запрос вносятся уже валидные данные
        $request->validated();
        // Работа с полученными данными в методе RegisterStore класса Service
        $this->service->RegisterStore($request);
        return view('home.index');
    }
}
