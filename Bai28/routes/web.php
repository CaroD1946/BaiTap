<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepairTicketController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 28: Hệ thống quản lý dịch vụ sửa chữa máy tính
|--------------------------------------------------------------------------
*/

Route::get('/', [RepairTicketController::class, 'index'])->name('home');
Route::resource('repair_tickets', RepairTicketController::class);
Route::post('/toggle-admin', [RepairTicketController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [RepairTicketController::class, 'reseed'])->name('reseed');
