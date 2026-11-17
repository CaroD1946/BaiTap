<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 19: Hệ thống quản lý tuyển dụng
|--------------------------------------------------------------------------
*/

Route::get('/', [JobController::class, 'index'])->name('home');
Route::resource('jobs', JobController::class);
Route::post('/toggle-admin', [JobController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [JobController::class, 'reseed'])->name('reseed');
