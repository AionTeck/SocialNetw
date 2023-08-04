<?php

namespace App\Http\Controllers\Friends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FriendsControllerIndex extends Controller
{
    public function __invoke()
    {
        return view('friends.index');
    }
}
