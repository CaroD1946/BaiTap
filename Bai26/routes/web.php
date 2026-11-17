<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 26: Hệ thống quản lý cửa hàng điện thoại
|--------------------------------------------------------------------------
*/

Route::get('/', [PhoneController::class, 'index'])->name('home');
Route::resource('phones', PhoneController::class);
Route::post('/toggle-admin', [PhoneController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [PhoneController::class, 'reseed'])->name('reseed');
