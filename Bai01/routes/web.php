<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 1: Hệ thống quản lý bài viết tin tức
|--------------------------------------------------------------------------
*/

Route::get('/', [PostController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);
Route::post('/toggle-admin', [PostController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [PostController::class, 'reseed'])->name('reseed');
