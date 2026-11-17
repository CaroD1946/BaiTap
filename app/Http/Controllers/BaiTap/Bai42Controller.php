<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai42Member;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 42. Hệ thống quản lý đăng ký thành viên
 * =========================================================================
 * Mô tả: Một câu lạc bộ cần quản lý thành viên gồm họ tên, email, ngày tham  gia và trạng thái thành viên. Người dùng đăng ký tài khoản; quản trị viên quản lý danh  sách thành viên.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai42
 * Bảng dữ liệu: members
 * Model Eloquent: Bai42Member
 * Controller: Bai42Controller
 * =========================================================================
 */
class Bai42Controller extends BaseBaiTapController
{
    protected $baiNum = 42;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai42Member::class;
}
