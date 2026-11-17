<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 22: Hệ thống quản lý tài liệu nội bộ
|--------------------------------------------------------------------------
*/

Route::get('/', [DocumentController::class, 'index'])->name('home');
Route::resource('documents', DocumentController::class);
Route::post('/toggle-admin', [DocumentController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [DocumentController::class, 'reseed'])->name('reseed');
