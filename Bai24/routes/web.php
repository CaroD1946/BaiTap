<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 24: Hệ thống quản lý thiết bị
|--------------------------------------------------------------------------
*/

Route::get('/', [EquipmentController::class, 'index'])->name('home');
Route::resource('equipments', EquipmentController::class);
Route::post('/toggle-admin', [EquipmentController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [EquipmentController::class, 'reseed'])->name('reseed');
