<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryItemController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 14: Hệ thống quản lý kho hàng
|--------------------------------------------------------------------------
*/

Route::get('/', [InventoryItemController::class, 'index'])->name('home');
Route::resource('inventory_items', InventoryItemController::class);
Route::post('/toggle-admin', [InventoryItemController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [InventoryItemController::class, 'reseed'])->name('reseed');
