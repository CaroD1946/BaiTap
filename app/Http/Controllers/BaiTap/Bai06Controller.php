<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai06Course;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 6. Hệ thống quản lý khóa học
 * =========================================================================
 * Mô tả: Trung tâm đào tạo cần quản lý khóa học gồm tên khóa học, mô tả,  học phí, thời lượng và trạng thái. Nhân viên quản lý khóa học; học viên chỉ xem các  khóa học đang mở.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai06
 * Bảng dữ liệu: courses
 * Model Eloquent: Bai06Course
 * Controller: Bai06Controller
 * =========================================================================
 */
class Bai06Controller extends BaseBaiTapController
{
    protected $baiNum = 6;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai06Course::class;
}
