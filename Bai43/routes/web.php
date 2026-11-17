<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealEstateController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 43: Hệ thống quản lý tin bất động sản
|--------------------------------------------------------------------------
*/

Route::get('/', [RealEstateController::class, 'index'])->name('home');
Route::resource('real_estates', RealEstateController::class);
Route::post('/toggle-admin', [RealEstateController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [RealEstateController::class, 'reseed'])->name('reseed');
