<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai38Booking;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 38. Hệ thống quản lý đặt phòng khách sạn
 * =========================================================================
 * Mô tả: Khách sạn cần quản lý loại phòng, giá phòng, ngày nhận phòng,  ngày trả phòng và trạng thái đặt phòng. Nhân viên quản lý đặt phòng; khách xem thông  tin phòng.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai38
 * Bảng dữ liệu: bookings
 * Model Eloquent: Bai38Booking
 * Controller: Bai38Controller
 * =========================================================================
 */
class Bai38Controller extends BaseBaiTapController
{
    protected $baiNum = 38;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai38Booking::class;
}
