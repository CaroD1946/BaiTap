<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 8: Hệ thống quản lý phòng trọ
|--------------------------------------------------------------------------
*/

Route::get('/', [RoomController::class, 'index'])->name('home');
Route::resource('rooms', RoomController::class);
Route::post('/toggle-admin', [RoomController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [RoomController::class, 'reseed'])->name('reseed');
