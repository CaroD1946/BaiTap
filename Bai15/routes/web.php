<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 15: Hệ thống quản lý phản hồi khách hàng
|--------------------------------------------------------------------------
*/

Route::get('/', [FeedbackController::class, 'index'])->name('home');
Route::resource('feedbacks', FeedbackController::class);
Route::post('/toggle-admin', [FeedbackController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [FeedbackController::class, 'reseed'])->name('reseed');
