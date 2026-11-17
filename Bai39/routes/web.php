<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 39: Hệ thống quản lý phương tiện
|--------------------------------------------------------------------------
*/

Route::get('/', [VehicleController::class, 'index'])->name('home');
Route::resource('vehicles', VehicleController::class);
Route::post('/toggle-admin', [VehicleController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [VehicleController::class, 'reseed'])->name('reseed');
