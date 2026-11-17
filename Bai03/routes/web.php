<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 3: Hệ thống quản lý sinh viên
|--------------------------------------------------------------------------
*/

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::resource('students', StudentController::class);
Route::post('/toggle-admin', [StudentController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [StudentController::class, 'reseed'])->name('reseed');
