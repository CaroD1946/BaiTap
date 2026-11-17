<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 2: Hệ thống quản lý sản phẩm
|--------------------------------------------------------------------------
*/

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::resource('products', ProductController::class);
Route::post('/toggle-admin', [ProductController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [ProductController::class, 'reseed'])->name('reseed');
