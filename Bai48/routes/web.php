<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResearchTopicController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 48: Hệ thống quản lý đề tài nghiên cứu khoa học
|--------------------------------------------------------------------------
*/

Route::get('/', [ResearchTopicController::class, 'index'])->name('home');
Route::resource('research_topics', ResearchTopicController::class);
Route::post('/toggle-admin', [ResearchTopicController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [ResearchTopicController::class, 'reseed'])->name('reseed');
