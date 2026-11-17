<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarrantyController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 18: Hệ thống quản lý phiếu bảo hành
|--------------------------------------------------------------------------
*/

Route::get('/', [WarrantyController::class, 'index'])->name('home');
Route::resource('warranties', WarrantyController::class);
Route::post('/toggle-admin', [WarrantyController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [WarrantyController::class, 'reseed'])->name('reseed');
