<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternshipRegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 49: Hệ thống quản lý đăng ký thực tập
|--------------------------------------------------------------------------
*/

Route::get('/', [InternshipRegistrationController::class, 'index'])->name('home');
Route::resource('internships', InternshipRegistrationController::class);
Route::post('/toggle-admin', [InternshipRegistrationController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [InternshipRegistrationController::class, 'reseed'])->name('reseed');
