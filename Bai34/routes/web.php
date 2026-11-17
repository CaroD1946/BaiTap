<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 34: Hệ thống quản lý khách hàng
|--------------------------------------------------------------------------
*/

Route::get('/', [CustomerController::class, 'index'])->name('home');
Route::resource('customers', CustomerController::class);
Route::post('/toggle-admin', [CustomerController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [CustomerController::class, 'reseed'])->name('reseed');
