<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseSectionController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 29: Hệ thống quản lý đăng ký học phần
|--------------------------------------------------------------------------
*/

Route::get('/', [CourseSectionController::class, 'index'])->name('home');
Route::resource('course_sections', CourseSectionController::class);
Route::post('/toggle-admin', [CourseSectionController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [CourseSectionController::class, 'reseed'])->name('reseed');
