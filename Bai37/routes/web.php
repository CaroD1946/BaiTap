<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 37: Hệ thống quản lý chương trình khuyến mãi
|--------------------------------------------------------------------------
*/

Route::get('/', [PromotionController::class, 'index'])->name('home');
Route::resource('promotions', PromotionController::class);
Route::post('/toggle-admin', [PromotionController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [PromotionController::class, 'reseed'])->name('reseed');
