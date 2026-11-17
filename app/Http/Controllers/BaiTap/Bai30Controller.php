<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai30Workshop;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 30. Hệ thống quản lý đăng ký hội thảo
 * =========================================================================
 * Mô tả: 
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai30
 * Bảng dữ liệu: workshops
 * Model Eloquent: Bai30Workshop
 * Controller: Bai30Controller
 * =========================================================================
 */
class Bai30Controller extends BaseBaiTapController
{
    protected $baiNum = 30;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai30Workshop::class;
}
