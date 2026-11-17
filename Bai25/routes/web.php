<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupportTicketController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 25: Hệ thống quản lý yêu cầu hỗ trợ kỹ thuật
|--------------------------------------------------------------------------
*/

Route::get('/', [SupportTicketController::class, 'index'])->name('home');
Route::resource('support_tickets', SupportTicketController::class);
Route::post('/toggle-admin', [SupportTicketController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [SupportTicketController::class, 'reseed'])->name('reseed');
