<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai49InternshipRegistration;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 49. Hệ thống quản lý đăng ký thực tập
 * =========================================================================
 * Mô tả: Nhà trường cần quản lý đăng ký thực tập của sinh viên gồm mã sinh  viên, doanh nghiệp, vị trí thực tập, ngày bắt đầu, ngày kết thúc và trạng thái. Sinh viên  gửi đăng ký; cán bộ phụ trách xét duyệt.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai49
 * Bảng dữ liệu: internships
 * Model Eloquent: Bai49InternshipRegistration
 * Controller: Bai49Controller
 * =========================================================================
 */
class Bai49Controller extends BaseBaiTapController
{
    protected $baiNum = 49;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai49InternshipRegistration::class;
}
