<?php

namespace App\Http\Controllers\Main;

class MainControllerIndex
{
    public function __invoke()
    {
        return view('home.index');
    }
}
