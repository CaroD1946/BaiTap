<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai14InventoryItem;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 14. Hệ thống quản lý kho hàng
 * =========================================================================
 * Mô tả: Doanh nghiệp cần quản lý mặt hàng gồm mã hàng, tên hàng, số  lượng tồn, đơn giá và vị trí lưu kho. Nhân viên kho cập nhật số lượng; người xem chỉ  tra cứu thông tin.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai14
 * Bảng dữ liệu: inventory_items
 * Model Eloquent: Bai14InventoryItem
 * Controller: Bai14Controller
 * =========================================================================
 */
class Bai14Controller extends BaseBaiTapController
{
    protected $baiNum = 14;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai14InventoryItem::class;
}
