<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai03Student;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 3. Hệ thống quản lý sinh viên
 * =========================================================================
 * Mô tả: Phòng đào tạo cần quản lý sinh viên gồm mã sinh viên, họ tên,  email, ngày sinh và lớp học. Nhân viên được phép cập nhật dữ liệu; người dùng thông  thường chỉ được xem danh sách.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai03
 * Bảng dữ liệu: students
 * Model Eloquent: Bai03Student
 * Controller: Bai03Controller
 * =========================================================================
 */
class Bai03Controller extends BaseBaiTapController
{
    protected $baiNum = 3;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai03Student::class;
}
