<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai33Project;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 33. Hệ thống quản lý dự án phần mềm
 * =========================================================================
 * Mô tả: Một nhóm phát triển cần quản lý dự án gồm tên dự án, mô tả, ngày  bắt đầu, hạn hoàn thành và trạng thái. Trưởng nhóm quản lý dự án; thành viên xem các  dự án được phân công.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai33
 * Bảng dữ liệu: projects
 * Model Eloquent: Bai33Project
 * Controller: Bai33Controller
 * =========================================================================
 */
class Bai33Controller extends BaseBaiTapController
{
    protected $baiNum = 33;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai33Project::class;
}
