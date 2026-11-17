<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai11Task;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 11. Hệ thống quản lý công việc
 * =========================================================================
 * Mô tả: Nhóm phát triển phần mềm cần quản lý công việc gồm tiêu đề, mô  tả, người phụ trách, hạn hoàn thành và trạng thái. Người dùng đăng nhập để quản lý  công việc được giao.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai11
 * Bảng dữ liệu: tasks
 * Model Eloquent: Bai11Task
 * Controller: Bai11Controller
 * =========================================================================
 */
class Bai11Controller extends BaseBaiTapController
{
    protected $baiNum = 11;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai11Task::class;
}
