<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 42: Hệ thống quản lý đăng ký thành viên
|--------------------------------------------------------------------------
*/

Route::get('/', [MemberController::class, 'index'])->name('home');
Route::resource('members', MemberController::class);
Route::post('/toggle-admin', [MemberController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [MemberController::class, 'reseed'])->name('reseed');
