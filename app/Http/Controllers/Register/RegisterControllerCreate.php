<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterControllerCreate extends Controller
{
    public function __invoke()
    {
        return view('register.create');
    }
}
