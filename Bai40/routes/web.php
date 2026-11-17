<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 40: Hệ thống quản lý lịch hẹn
|--------------------------------------------------------------------------
*/

Route::get('/', [AppointmentController::class, 'index'])->name('home');
Route::resource('appointments', AppointmentController::class);
Route::post('/toggle-admin', [AppointmentController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [AppointmentController::class, 'reseed'])->name('reseed');
