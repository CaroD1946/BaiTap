<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai08Room;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 8. Hệ thống quản lý phòng trọ
 * =========================================================================
 * Mô tả: Chủ nhà cần quản lý phòng trọ gồm mã phòng, diện tích, giá thuê,  trạng thái và mô tả. Người thuê có thể xem danh sách phòng còn trống; chủ nhà quản  lý thông tin phòng.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai08
 * Bảng dữ liệu: rooms
 * Model Eloquent: Bai08Room
 * Controller: Bai08Controller
 * =========================================================================
 */
class Bai08Controller extends BaseBaiTapController
{
    protected $baiNum = 8;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai08Room::class;
}
