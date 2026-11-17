<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 32: Hệ thống quản lý câu hỏi trắc nghiệm
|--------------------------------------------------------------------------
*/

Route::get('/', [QuestionController::class, 'index'])->name('home');
Route::resource('questions', QuestionController::class);
Route::post('/toggle-admin', [QuestionController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [QuestionController::class, 'reseed'])->name('reseed');
