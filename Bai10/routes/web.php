<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 10: Hệ thống quản lý phòng khám
|--------------------------------------------------------------------------
*/

Route::get('/', [PatientController::class, 'index'])->name('home');
Route::resource('patients', PatientController::class);
Route::post('/toggle-admin', [PatientController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [PatientController::class, 'reseed'])->name('reseed');
