<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai20Invoice;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 20. Hệ thống quản lý hóa đơn
 * =========================================================================
 * Mô tả: Doanh nghiệp cần quản lý hóa đơn gồm mã hóa đơn, khách hàng,  ngày lập, tổng tiền và trạng thái thanh toán. Nhân viên kế toán tạo và cập nhật hóa đơn.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai20
 * Bảng dữ liệu: invoices
 * Model Eloquent: Bai20Invoice
 * Controller: Bai20Controller
 * =========================================================================
 */
class Bai20Controller extends BaseBaiTapController
{
    protected $baiNum = 20;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai20Invoice::class;
}
