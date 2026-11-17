<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuItemController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 9: Hệ thống quản lý nhà hàng
|--------------------------------------------------------------------------
*/

Route::get('/', [MenuItemController::class, 'index'])->name('home');
Route::resource('menu_items', MenuItemController::class);
Route::post('/toggle-admin', [MenuItemController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [MenuItemController::class, 'reseed'])->name('reseed');
