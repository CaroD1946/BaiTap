<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai19Job;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 19. Hệ thống quản lý tuyển dụng
 * =========================================================================
 * Mô tả: Doanh nghiệp cần quản lý tin tuyển dụng gồm chức danh, mô tả,  mức lương, hạn ứng tuyển và trạng thái. Ứng viên xem tin; nhân viên nhân sự quản lý  nội dung.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai19
 * Bảng dữ liệu: jobs
 * Model Eloquent: Bai19Job
 * Controller: Bai19Controller
 * =========================================================================
 */
class Bai19Controller extends BaseBaiTapController
{
    protected $baiNum = 19;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai19Job::class;
}
