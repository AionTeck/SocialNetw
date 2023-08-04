<?php

namespace App\Http\Controllers\Messages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagesControllerIndex extends Controller
{
    public function __invoke()
    {
        return view('messages.index');
    }
}
