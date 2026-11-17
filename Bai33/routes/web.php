<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 33: Hệ thống quản lý dự án phần mềm
|--------------------------------------------------------------------------
*/

Route::get('/', [ProjectController::class, 'index'])->name('home');
Route::resource('projects', ProjectController::class);
Route::post('/toggle-admin', [ProjectController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [ProjectController::class, 'reseed'])->name('reseed');
