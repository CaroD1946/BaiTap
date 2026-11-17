<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai45Asset;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 45. Hệ thống quản lý tài sản doanh nghiệp
 * =========================================================================
 * Mô tả: Doanh nghiệp cần quản lý tài sản gồm mã tài sản, tên, ngày mua,  nguyên giá, phòng ban sử dụng và tình trạng. Nhân viên tài sản cập nhật hồ sơ.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai45
 * Bảng dữ liệu: assets
 * Model Eloquent: Bai45Asset
 * Controller: Bai45Controller
 * =========================================================================
 */
class Bai45Controller extends BaseBaiTapController
{
    protected $baiNum = 45;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai45Asset::class;
}
