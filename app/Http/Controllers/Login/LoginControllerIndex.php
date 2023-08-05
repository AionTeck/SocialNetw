<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginControllerIndex extends Controller
{
    public function __invoke()
    {
        return view('login.index');
    }
}
