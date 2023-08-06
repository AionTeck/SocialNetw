<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login\LoginStore;
use Illuminate\Http\Request;

class LoginControllerStore extends BaseController
{
    public function __invoke(LoginStore $request)
    {
        //Передача файлов в отедльный запрос и последующая валидация,
        // после чего в запрос вносятся уже валидные данные
        $request->validated($request);
        // Работа с полученными данными в методе LoginStore класса Service
        $this->service->LoginStore($request);
        return redirect('home');
    }
}
