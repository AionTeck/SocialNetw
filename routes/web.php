<?php

use App\Http\Controllers\Communities\CommunitiesControllerIndex;
use App\Http\Controllers\Friends\FriendsControllerIndex;
use App\Http\Controllers\Main\MainControllerIndex;
use App\Http\Controllers\Messages\MessagesControllerIndex;
use App\Http\Controllers\News\NewsControllerIndex;
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

Route::get('/home', [MainControllerIndex::class, '__invoke'])->name('home.index');
Route::get('/news', [NewsControllerIndex::class, '__invoke'])->name('news.index');
Route::get('/messages', [MessagesControllerIndex::class, '__invoke'])->name('messages.index');
Route::get('/friends', [FriendsControllerIndex::class, '__invoke'])->name('friends.index');
Route::get('/communities', [CommunitiesControllerIndex::class, '__invoke'])->name('communities.index');
