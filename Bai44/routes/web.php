<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchaseRequestController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 44: Hệ thống quản lý yêu cầu mua hàng
|--------------------------------------------------------------------------
*/

Route::get('/', [PurchaseRequestController::class, 'index'])->name('home');
Route::resource('purchase_requests', PurchaseRequestController::class);
Route::post('/toggle-admin', [PurchaseRequestController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [PurchaseRequestController::class, 'reseed'])->name('reseed');
