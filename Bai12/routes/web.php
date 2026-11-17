<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 12: Hệ thống quản lý sự kiện
|--------------------------------------------------------------------------
*/

Route::get('/', [EventController::class, 'index'])->name('home');
Route::resource('events', EventController::class);
Route::post('/toggle-admin', [EventController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [EventController::class, 'reseed'])->name('reseed');
