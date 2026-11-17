<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai35StockReceipt;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 35. Hệ thống quản lý phiếu nhập kho
 * =========================================================================
 * Mô tả: Doanh nghiệp cần quản lý phiếu nhập kho gồm mã phiếu, nhà cung  cấp, ngày nhập, tổng số lượng và ghi chú. Nhân viên kho lập phiếu và theo dõi lịch sử  nhập hàng.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai35
 * Bảng dữ liệu: stock_receipts
 * Model Eloquent: Bai35StockReceipt
 * Controller: Bai35Controller
 * =========================================================================
 */
class Bai35Controller extends BaseBaiTapController
{
    protected $baiNum = 35;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai35StockReceipt::class;
}
