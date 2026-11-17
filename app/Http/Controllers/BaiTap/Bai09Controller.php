<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai09MenuItem;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 9. Hệ thống quản lý nhà hàng
 * =========================================================================
 * Mô tả: Nhà hàng cần quản lý thực đơn gồm tên món ăn, danh mục, giá, mô  tả và ảnh món ăn. Khách truy cập xem thực đơn; nhân viên quản trị được thêm và cập  nhật món.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai09
 * Bảng dữ liệu: menu_items
 * Model Eloquent: Bai09MenuItem
 * Controller: Bai09Controller
 * =========================================================================
 */
class Bai09Controller extends BaseBaiTapController
{
    protected $baiNum = 9;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai09MenuItem::class;
}
