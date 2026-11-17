<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai40Appointment;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 40. Hệ thống quản lý lịch hẹn
 * =========================================================================
 * Mô tả: Trung tâm dịch vụ cần quản lý lịch hẹn gồm tên khách hàng, số điện  thoại, dịch vụ, ngày giờ và trạng thái. Nhân viên tiếp nhận và cập nhật lịch hẹn.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai40
 * Bảng dữ liệu: appointments
 * Model Eloquent: Bai40Appointment
 * Controller: Bai40Controller
 * =========================================================================
 */
class Bai40Controller extends BaseBaiTapController
{
    protected $baiNum = 40;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai40Appointment::class;
}
