<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 30: Hệ thống quản lý đăng ký hội thảo
|--------------------------------------------------------------------------
*/

Route::get('/', [WorkshopController::class, 'index'])->name('home');
Route::resource('workshops', WorkshopController::class);
Route::post('/toggle-admin', [WorkshopController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [WorkshopController::class, 'reseed'])->name('reseed');
