<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai13Assignment;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 13. Hệ thống quản lý bài tập trực tuyến
 * =========================================================================
 * Mô tả: Giảng viên cần tạo bài tập gồm tiêu đề, nội dung, hạn nộp và tệp  đính kèm. Sinh viên xem bài tập; giảng viên quản lý nội dung và tài liệu.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai13
 * Bảng dữ liệu: assignments
 * Model Eloquent: Bai13Assignment
 * Controller: Bai13Controller
 * =========================================================================
 */
class Bai13Controller extends BaseBaiTapController
{
    protected $baiNum = 13;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai13Assignment::class;
}
