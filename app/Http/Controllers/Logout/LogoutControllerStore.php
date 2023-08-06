<?php

namespace App\Http\Controllers\Logout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutControllerStore extends BaseController
{
    public function __invoke(Request $request)
    {
        $this->service->logout($request);
        return redirect('/login');
    }
}
