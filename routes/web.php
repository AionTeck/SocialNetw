<?php

use App\Http\Controllers\Communities\CommunitiesControllerIndex;
use App\Http\Controllers\Friends\FriendsControllerIndex;
use App\Http\Controllers\Login\LoginControllerIndex;
use App\Http\Controllers\Login\LoginControllerStore;
use App\Http\Controllers\Logout\LogoutControllerStore;
use App\Http\Controllers\Main\MainControllerIndex;
use App\Http\Controllers\Messages\MessagesControllerIndex;
use App\Http\Controllers\News\NewsControllerCreate;
use App\Http\Controllers\News\NewsControllerIndex;
use App\Http\Controllers\News\NewsControllerStore;
use App\Http\Controllers\Register\RegisterControllerCreate;
use App\Http\Controllers\Register\RegisterControllerStore;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('/login', LoginControllerIndex::class)->name('login.index');
    Route::post('/login', LoginControllerStore::class)->name('login.store');

    Route::get('/register', RegisterControllerCreate::class)->name('register.create');
    Route::post('/register', RegisterControllerStore::class)->name('register.store');
});

Route::middleware('auth')->group(function () {
Route::get('/logout', LogoutControllerStore::class)->name('logout');
Route::get('/home', MainControllerIndex::class)->name('home.index');
Route::get('/news', NewsControllerIndex::class)->name('news.index');
Route::get('/news/create', NewsControllerCreate::class)->name('news.create');
Route::post('/news', NewsControllerStore::class)->name('news.store');

Route::get('/messages', MessagesControllerIndex::class)->name('messages.index');
Route::get('/friends', FriendsControllerIndex::class)->name('friends.index');
Route::get('/communities', CommunitiesControllerIndex::class)->name('communities.index');
});
