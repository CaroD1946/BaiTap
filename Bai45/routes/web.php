<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 45: Hệ thống quản lý tài sản doanh nghiệp
|--------------------------------------------------------------------------
*/

Route::get('/', [AssetController::class, 'index'])->name('home');
Route::resource('assets', AssetController::class);
Route::post('/toggle-admin', [AssetController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [AssetController::class, 'reseed'])->name('reseed');
