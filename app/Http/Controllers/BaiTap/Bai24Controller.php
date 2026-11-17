<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai24Equipment;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 24. Hệ thống quản lý thiết bị
 * =========================================================================
 * Mô tả: Trường học cần quản lý thiết bị gồm mã thiết bị, tên, phòng sử dụng,  ngày mua và trạng thái. Nhân viên quản trị thiết bị có thể cập nhật tình trạng sử dụng.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai24
 * Bảng dữ liệu: equipments
 * Model Eloquent: Bai24Equipment
 * Controller: Bai24Controller
 * =========================================================================
 */
class Bai24Controller extends BaseBaiTapController
{
    protected $baiNum = 24;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai24Equipment::class;
}
