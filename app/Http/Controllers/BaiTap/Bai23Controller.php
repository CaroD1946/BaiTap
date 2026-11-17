<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai23WorkSchedule;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 23. Hệ thống quản lý lịch làm việc
 * =========================================================================
 * Mô tả: Doanh nghiệp cần quản lý lịch làm việc gồm nhân viên, ngày làm,  giờ bắt đầu, giờ kết thúc và ghi chú. Quản lý phân công lịch; nhân viên xem lịch của  mình.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai23
 * Bảng dữ liệu: work_schedules
 * Model Eloquent: Bai23WorkSchedule
 * Controller: Bai23Controller
 * =========================================================================
 */
class Bai23Controller extends BaseBaiTapController
{
    protected $baiNum = 23;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai23WorkSchedule::class;
}
