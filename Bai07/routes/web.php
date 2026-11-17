<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 7: Hệ thống quản lý nhân viên
|--------------------------------------------------------------------------
*/

Route::get('/', [EmployeeController::class, 'index'])->name('home');
Route::resource('employees', EmployeeController::class);
Route::post('/toggle-admin', [EmployeeController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [EmployeeController::class, 'reseed'])->name('reseed');
