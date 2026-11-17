<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 17: Hệ thống quản lý nhà cung cấp
|--------------------------------------------------------------------------
*/

Route::get('/', [SupplierController::class, 'index'])->name('home');
Route::resource('suppliers', SupplierController::class);
Route::post('/toggle-admin', [SupplierController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [SupplierController::class, 'reseed'])->name('reseed');
