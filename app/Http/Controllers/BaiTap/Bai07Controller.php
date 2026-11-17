<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai07Employee;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 7. Hệ thống quản lý nhân viên
 * =========================================================================
 * Mô tả: Một doanh nghiệp cần quản lý nhân viên gồm mã nhân viên, họ tên,  email, phòng ban, lương và trạng thái làm việc. Bộ phận nhân sự quản lý dữ liệu nhân  viên.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai07
 * Bảng dữ liệu: employees
 * Model Eloquent: Bai07Employee
 * Controller: Bai07Controller
 * =========================================================================
 */
class Bai07Controller extends BaseBaiTapController
{
    protected $baiNum = 7;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai07Employee::class;
}
