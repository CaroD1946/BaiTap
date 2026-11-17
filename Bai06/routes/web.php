<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 6: Hệ thống quản lý khóa học
|--------------------------------------------------------------------------
*/

Route::get('/', [CourseController::class, 'index'])->name('home');
Route::resource('courses', CourseController::class);
Route::post('/toggle-admin', [CourseController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [CourseController::class, 'reseed'])->name('reseed');
