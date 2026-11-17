<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số 31: Hệ thống quản lý công thức nấu ăn
|--------------------------------------------------------------------------
*/

Route::get('/', [RecipeController::class, 'index'])->name('home');
Route::resource('recipes', RecipeController::class);
Route::post('/toggle-admin', [RecipeController::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [RecipeController::class, 'reseed'])->name('reseed');
