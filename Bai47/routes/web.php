<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 47: Hệ thống quản lý đăng ký dịch vụ
|--------------------------------------------------------------------------
*/

Route::get('/', [ServiceController::class, 'index'])->name('home');
Route::resource('services', ServiceController::class);
Route::post('/toggle-admin', [ServiceController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [ServiceController::class, 'reseed'])->name('reseed');
