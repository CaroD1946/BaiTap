<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai28RepairTicket;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 28. Hệ thống quản lý dịch vụ sửa chữa máy tính
 * =========================================================================
 * Mô tả: Cửa hàng sửa chữa máy tính cần quản lý phiếu sửa chữa gồm tên  khách hàng, thiết bị, mô tả lỗi, chi phí dự kiến và trạng thái. Nhân viên cập nhật tình  trạng sửa chữa.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai28
 * Bảng dữ liệu: repair_tickets
 * Model Eloquent: Bai28RepairTicket
 * Controller: Bai28Controller
 * =========================================================================
 */
class Bai28Controller extends BaseBaiTapController
{
    protected $baiNum = 28;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai28RepairTicket::class;
}
