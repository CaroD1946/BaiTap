<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai12Event;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 12. Hệ thống quản lý sự kiện
 * =========================================================================
 * Mô tả: Một đơn vị tổ chức sự kiện cần quản lý tên sự kiện, địa điểm, thời  gian, số lượng chỗ và ảnh quảng bá. Khách truy cập xem sự kiện; nhân viên quản lý nội  dung.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai12
 * Bảng dữ liệu: events
 * Model Eloquent: Bai12Event
 * Controller: Bai12Controller
 * =========================================================================
 */
class Bai12Controller extends BaseBaiTapController
{
    protected $baiNum = 12;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai12Event::class;
}
