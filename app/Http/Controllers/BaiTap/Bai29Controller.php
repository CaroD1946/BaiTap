<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai29CourseSection;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 29. Hệ thống quản lý đăng ký học phần
 * =========================================================================
 * Mô tả: Nhà trường cần quản lý học phần gồm mã học phần, tên học phần,  số tín chỉ và số lượng chỗ. Sinh viên có thể xem danh sách; nhân viên quản lý học phần.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai29
 * Bảng dữ liệu: course_sections
 * Model Eloquent: Bai29CourseSection
 * Controller: Bai29Controller
 * =========================================================================
 */
class Bai29Controller extends BaseBaiTapController
{
    protected $baiNum = 29;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai29CourseSection::class;
}
