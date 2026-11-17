<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 41: Hệ thống quản lý chi phí dự án
|--------------------------------------------------------------------------
*/

Route::get('/', [ExpenseController::class, 'index'])->name('home');
Route::resource('expenses', ExpenseController::class);
Route::post('/toggle-admin', [ExpenseController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [ExpenseController::class, 'reseed'])->name('reseed');
