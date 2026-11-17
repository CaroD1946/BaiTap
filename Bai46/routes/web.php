<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumPostController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 46: Hệ thống quản lý bài đăng diễn đàn
|--------------------------------------------------------------------------
*/

Route::get('/', [ForumPostController::class, 'index'])->name('home');
Route::resource('forum_posts', ForumPostController::class);
Route::post('/toggle-admin', [ForumPostController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [ForumPostController::class, 'reseed'])->name('reseed');
