<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FashionProductController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 27: Hệ thống quản lý cửa hàng thời trang
|--------------------------------------------------------------------------
*/

Route::get('/', [FashionProductController::class, 'index'])->name('home');
Route::resource('fashion_products', FashionProductController::class);
Route::post('/toggle-admin', [FashionProductController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [FashionProductController::class, 'reseed'])->name('reseed');
