<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai04Book;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 4. Hệ thống quản lý thư viện
 * =========================================================================
 * Mô tả: 
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai04
 * Bảng dữ liệu: books
 * Model Eloquent: Bai04Book
 * Controller: Bai04Controller
 * =========================================================================
 */
class Bai04Controller extends BaseBaiTapController
{
    protected $baiNum = 4;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai04Book::class;
}
