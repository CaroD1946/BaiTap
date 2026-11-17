<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai47Service;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 47. Hệ thống quản lý đăng ký dịch vụ
 * =========================================================================
 * Mô tả: Một trung tâm dịch vụ cần quản lý dịch vụ gồm tên dịch vụ, giá,  mô tả và trạng thái; đồng thời tiếp nhận đăng ký sử dụng dịch vụ từ khách hàng.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai47
 * Bảng dữ liệu: services
 * Model Eloquent: Bai47Service
 * Controller: Bai47Controller
 * =========================================================================
 */
class Bai47Controller extends BaseBaiTapController
{
    protected $baiNum = 47;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai47Service::class;
}
