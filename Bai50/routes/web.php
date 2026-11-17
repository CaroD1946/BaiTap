<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleProductController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 50: Hệ thống quản lý bán hàng tổng hợp
|--------------------------------------------------------------------------
*/

Route::get('/', [SaleProductController::class, 'index'])->name('home');
Route::resource('sales_products', SaleProductController::class);
Route::post('/toggle-admin', [SaleProductController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [SaleProductController::class, 'reseed'])->name('reseed');
