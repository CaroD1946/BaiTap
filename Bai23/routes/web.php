<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkScheduleController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 23: Hệ thống quản lý lịch làm việc
|--------------------------------------------------------------------------
*/

Route::get('/', [WorkScheduleController::class, 'index'])->name('home');
Route::resource('work_schedules', WorkScheduleController::class);
Route::post('/toggle-admin', [WorkScheduleController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [WorkScheduleController::class, 'reseed'])->name('reseed');
