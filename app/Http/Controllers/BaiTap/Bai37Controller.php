<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai37Promotion;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 37. Hệ thống quản lý chương trình khuyến mãi
 * =========================================================================
 * Mô tả: 
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai37
 * Bảng dữ liệu: promotions
 * Model Eloquent: Bai37Promotion
 * Controller: Bai37Controller
 * =========================================================================
 */
class Bai37Controller extends BaseBaiTapController
{
    protected $baiNum = 37;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai37Promotion::class;
}
