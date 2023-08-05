<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login\LoginStore;
use Illuminate\Http\Request;

class LoginControllerStore extends BaseController
{
    public function __invoke(LoginStore $request)
    {
        $request->validated($request);

        $this->service->LoginStore($request);
        return redirect('home');
    }
}
