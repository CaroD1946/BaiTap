<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollaboratorPostController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 21: Hệ thống quản lý bài đăng tuyển cộng tác viên
|--------------------------------------------------------------------------
*/

Route::get('/', [CollaboratorPostController::class, 'index'])->name('home');
Route::resource('collaborator_posts', CollaboratorPostController::class);
Route::post('/toggle-admin', [CollaboratorPostController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [CollaboratorPostController::class, 'reseed'])->name('reseed');
