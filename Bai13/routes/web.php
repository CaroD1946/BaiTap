<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 13: Hệ thống quản lý bài tập trực tuyến
|--------------------------------------------------------------------------
*/

Route::get('/', [AssignmentController::class, 'index'])->name('home');
Route::resource('assignments', AssignmentController::class);
Route::post('/toggle-admin', [AssignmentController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [AssignmentController::class, 'reseed'])->name('reseed');
