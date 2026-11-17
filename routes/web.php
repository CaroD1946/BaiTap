<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaiTap\DashboardController;
use App\Http\Controllers\BaiTap\BaseBaiTapController;

/*
|--------------------------------------------------------------------------
| Web Routes - Hệ Thống 50 Bài Tập Thực Hành Laravel
|--------------------------------------------------------------------------
*/

// UI Tổng: Danh sách và quản lý 50 bài tập
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/baitap/init-all', [DashboardController::class, 'initAll'])->name('dashboard.init_all');
Route::get('/baitap/init-single/{id}', [DashboardController::class, 'initSingle'])->name('dashboard.init_single');
Route::post('/baitap/toggle-admin', [BaseBaiTapController::class, 'toggleAdmin'])->name('baitap.toggle_admin');

// Đăng ký tường minh Route cho từng bài (Bài 01 -> Bài 50)
for ($i = 1; $i <= 50; $i++) {
    $numStr = sprintf('%02d', $i);
    $controllerClass = "App\\Http\\Controllers\\BaiTap\\Bai{$numStr}Controller";

    Route::prefix("bai/{$i}")->group(function () use ($controllerClass, $i) {
        Route::get('/', [$controllerClass, 'index'])->name("baitap.bai{$i}");
        Route::post('/', [$controllerClass, 'store'])->name("baitap.bai{$i}.store");
        Route::get('/{itemId}', [$controllerClass, 'show'])->name("baitap.bai{$i}.show");
        Route::get('/{itemId}/edit', [$controllerClass, 'edit'])->name("baitap.bai{$i}.edit");
        Route::put('/{itemId}', [$controllerClass, 'update'])->name("baitap.bai{$i}.update");
        Route::delete('/{itemId}', [$controllerClass, 'destroy'])->name("baitap.bai{$i}.destroy");
        Route::post('/reseed', [$controllerClass, 'reseed'])->name("baitap.bai{$i}.reseed");
    });
}

// Route định tuyến chung tiện lợi
Route::get('/bai/{id}', function ($id, \Illuminate\Http\Request $request) {
    $numStr = sprintf('%02d', $id);
    $controllerClass = "App\\Http\\Controllers\\BaiTap\\Bai{$numStr}Controller";
    if (class_exists($controllerClass)) {
        return app($controllerClass)->index($request);
    }
    abort(404, "Không tìm thấy Bài {$id}");
})->name('baitap.show_bai');

Route::post('/bai/{id}', function ($id, \Illuminate\Http\Request $request) {
    $numStr = sprintf('%02d', $id);
    $controllerClass = "App\\Http\\Controllers\\BaiTap\\Bai{$numStr}Controller";
    return app($controllerClass)->store($request);
})->name('baitap.store_item');

Route::put('/bai/{id}/{itemId}', function ($id, $itemId, \Illuminate\Http\Request $request) {
    $numStr = sprintf('%02d', $id);
    $controllerClass = "App\\Http\\Controllers\\BaiTap\\Bai{$numStr}Controller";
    return app($controllerClass)->update($request, $itemId);
})->name('baitap.update_item');

Route::delete('/bai/{id}/{itemId}', function ($id, $itemId) {
    $numStr = sprintf('%02d', $id);
    $controllerClass = "App\\Http\\Controllers\\BaiTap\\Bai{$numStr}Controller";
    return app($controllerClass)->destroy($itemId);
})->name('baitap.destroy_item');

Route::post('/bai/{id}/reseed', function ($id) {
    $numStr = sprintf('%02d', $id);
    $controllerClass = "App\\Http\\Controllers\\BaiTap\\Bai{$numStr}Controller";
    return app($controllerClass)->reseed();
})->name('baitap.reseed');
