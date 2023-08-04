<?php

namespace App\Http\Controllers\Communities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommunitiesControllerIndex extends Controller
{
    public function __invoke()
    {
        return view('communities.index');
    }
}
