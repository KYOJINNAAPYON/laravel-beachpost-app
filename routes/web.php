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
    Route::get('users/mypage', 'mypage')->name('mypage')->middleware('auth');
    Route::get('users/mypage/edit', 'edit')->name('mypage.edit')->middleware('auth');
    Route::put('users/mypage', 'update')->name('mypage.update')->middleware('auth');
    Route::get('users/mypage/favorite', 'favorite')->name('mypage.favorite')->middleware('auth');
});

Route::controller(PostController::class)->group(function () {
    Route::get('users/myposts', 'myposts')->name('myposts')->middleware('auth');
    Route::get('users/myposts/edit', 'edit')->name('myposts.edit')->middleware('auth');
    Route::put('users/myposts', 'update')->name('myposts.update')->middleware('auth');
});

Auth::routes();

Route::resource('posts', PostController::class)->middleware('auth');


Route::resource('upload',UploadController::class);

Route::get('/uplopad', [CloudinaryUploadController::class, 'uplopad']);
Route::post('/upload', [CloudinaryUploadController::class, 'store'])->name('store');