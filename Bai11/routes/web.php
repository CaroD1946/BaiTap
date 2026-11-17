<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 11: Hệ thống quản lý công việc
|--------------------------------------------------------------------------
*/

Route::get('/', [TaskController::class, 'index'])->name('home');
Route::resource('tasks', TaskController::class);
Route::post('/toggle-admin', [TaskController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [TaskController::class, 'reseed'])->name('reseed');
