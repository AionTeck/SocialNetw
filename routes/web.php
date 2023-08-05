<?php

use App\Http\Controllers\Communities\CommunitiesControllerIndex;
use App\Http\Controllers\Friends\FriendsControllerIndex;
use App\Http\Controllers\Login\LoginControllerIndex;
use App\Http\Controllers\Login\LoginControllerStore;
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
    Route::get('/login', [LoginControllerIndex::class, '__invoke'])->name('login.index');
    Route::post('/login', [LoginControllerStore::class, '__invoke'])->name('login.store');

    Route::get('/register', [RegisterControllerCreate::class, '__invoke'])->name('register.create');
    Route::post('/register', [RegisterControllerStore::class, '__invoke'])->name('register.store');
});

Route::middleware('auth')->group(function () {
Route::get('/home', [MainControllerIndex::class, '__invoke'])->name('home.index');
Route::get('/news', [NewsControllerIndex::class, '__invoke'])->name('news.index');
Route::get('/news/create', [NewsControllerCreate::class, '__invoke'])->name('news.create');
Route::post('/news', [NewsControllerStore::class, '__invoke'])->name('news.store');

Route::get('/messages', [MessagesControllerIndex::class, '__invoke'])->name('messages.index');
Route::get('/friends', [FriendsControllerIndex::class, '__invoke'])->name('friends.index');
Route::get('/communities', [CommunitiesControllerIndex::class, '__invoke'])->name('communities.index');
});
