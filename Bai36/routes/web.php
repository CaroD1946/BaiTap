<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 36: Hệ thống quản lý bài đánh giá sản phẩm
|--------------------------------------------------------------------------
*/

Route::get('/', [ProductReviewController::class, 'index'])->name('home');
Route::resource('product_reviews', ProductReviewController::class);
Route::post('/toggle-admin', [ProductReviewController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [ProductReviewController::class, 'reseed'])->name('reseed');
