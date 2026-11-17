<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai39Vehicle;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 39. Hệ thống quản lý phương tiện
 * =========================================================================
 * Mô tả: Doanh nghiệp vận tải cần quản lý phương tiện gồm biển số, loại xe, tải  trọng, ngày đăng kiểm và trạng thái hoạt động. Nhân viên quản lý hồ sơ phương tiện.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai39
 * Bảng dữ liệu: vehicles
 * Model Eloquent: Bai39Vehicle
 * Controller: Bai39Controller
 * =========================================================================
 */
class Bai39Controller extends BaseBaiTapController
{
    protected $baiNum = 39;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai39Vehicle::class;
}
