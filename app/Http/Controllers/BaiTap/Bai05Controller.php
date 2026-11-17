<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai05Order;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 5. Hệ thống quản lý đơn hàng
 * =========================================================================
 * Mô tả: Một cửa hàng trực tuyến cần quản lý đơn hàng gồm mã đơn, tên  khách hàng, địa chỉ giao hàng, tổng tiền và trạng thái. Nhân viên có thể theo dõi và cập  nhật trạng thái đơn hàng.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai05
 * Bảng dữ liệu: orders
 * Model Eloquent: Bai05Order
 * Controller: Bai05Controller
 * =========================================================================
 */
class Bai05Controller extends BaseBaiTapController
{
    protected $baiNum = 5;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai05Order::class;
}
