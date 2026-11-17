<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai18Warranty;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 18. Hệ thống quản lý phiếu bảo hành
 * =========================================================================
 * Mô tả: Trung tâm bảo hành cần quản lý phiếu bảo hành gồm mã phiếu, sản  phẩm, khách hàng, ngày tiếp nhận và trạng thái xử lý. Nhân viên cập nhật tiến độ bảo  hành.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai18
 * Bảng dữ liệu: warranties
 * Model Eloquent: Bai18Warranty
 * Controller: Bai18Controller
 * =========================================================================
 */
class Bai18Controller extends BaseBaiTapController
{
    protected $baiNum = 18;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai18Warranty::class;
}
