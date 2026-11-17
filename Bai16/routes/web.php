<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 16: Hệ thống quản lý danh mục sản phẩm
|--------------------------------------------------------------------------
*/

Route::get('/', [CategoryController::class, 'index'])->name('home');
Route::resource('categories', CategoryController::class);
Route::post('/toggle-admin', [CategoryController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [CategoryController::class, 'reseed'])->name('reseed');
