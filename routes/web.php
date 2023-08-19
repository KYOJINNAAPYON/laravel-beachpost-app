<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index'])->middleware('auth');

Route::get('posts/{post}/favorite', [PostController::class, 'favorite'])->name('posts.favorite');

Route::controller(UserController::class)->group(function () {
    Route::get('users/mypage', 'mypage')->name('mypage');
    Route::get('users/mypage/edit', 'edit')->name('mypage.edit');
    Route::put('users/mypage', 'update')->name('mypage.update');
    Route::get('users/mypage/favorite', 'favorite')->name('mypage.favorite');
});

Route::controller(PostController::class)->group(function () {
    Route::get('users/myposts', 'myposts')->name('myposts');
    Route::get('users/myposts/edit', 'edit')->name('myposts.edit');
    Route::put('users/myposts', 'update')->name('myposts.update');
});

Auth::routes();

Route::resource('posts', PostController::class);


Route::resource('upload',UploadController::class);