<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 4: Hệ thống quản lý thư viện
|--------------------------------------------------------------------------
*/

Route::get('/', [BookController::class, 'index'])->name('home');
Route::resource('books', BookController::class);
Route::post('/toggle-admin', [BookController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [BookController::class, 'reseed'])->name('reseed');
