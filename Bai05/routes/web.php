<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 5: Hệ thống quản lý đơn hàng
|--------------------------------------------------------------------------
*/

Route::get('/', [OrderController::class, 'index'])->name('home');
Route::resource('orders', OrderController::class);
Route::post('/toggle-admin', [OrderController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [OrderController::class, 'reseed'])->name('reseed');
