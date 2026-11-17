<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockReceiptController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 35: Hệ thống quản lý phiếu nhập kho
|--------------------------------------------------------------------------
*/

Route::get('/', [StockReceiptController::class, 'index'])->name('home');
Route::resource('stock_receipts', StockReceiptController::class);
Route::post('/toggle-admin', [StockReceiptController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [StockReceiptController::class, 'reseed'])->name('reseed');
