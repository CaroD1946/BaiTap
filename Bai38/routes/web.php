<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 38: Hệ thống quản lý đặt phòng khách sạn
|--------------------------------------------------------------------------
*/

Route::get('/', [BookingController::class, 'index'])->name('home');
Route::resource('bookings', BookingController::class);
Route::post('/toggle-admin', [BookingController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [BookingController::class, 'reseed'])->name('reseed');
