<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 20: Hệ thống quản lý hóa đơn
|--------------------------------------------------------------------------
*/

Route::get('/', [InvoiceController::class, 'index'])->name('home');
Route::resource('invoices', InvoiceController::class);
Route::post('/toggle-admin', [InvoiceController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [InvoiceController::class, 'reseed'])->name('reseed');
