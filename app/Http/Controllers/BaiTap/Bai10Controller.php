<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai10Patient;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 10. Hệ thống quản lý phòng khám
 * =========================================================================
 * Mô tả: Phòng khám cần quản lý hồ sơ bệnh nhân gồm mã bệnh nhân, họ  tên, số điện thoại, ngày sinh và ghi chú hành chính. Nhân viên tiếp nhận được quản lý  hồ sơ; khách không được truy cập dữ liệu nội bộ.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai10
 * Bảng dữ liệu: patients
 * Model Eloquent: Bai10Patient
 * Controller: Bai10Controller
 * =========================================================================
 */
class Bai10Controller extends BaseBaiTapController
{
    protected $baiNum = 10;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai10Patient::class;
}
