<?php

namespace App\Http\Controllers\Main;

use App\Models\User;

class MainControllerIndex extends BaseController
{
    public function __invoke()
    {
        return view('home.index');
    }
}
