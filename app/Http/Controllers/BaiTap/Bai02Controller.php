<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai02Product;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 2. Hệ thống quản lý sản phẩm
 * =========================================================================
 * Mô tả: Một cửa hàng cần quản lý sản phẩm gồm mã sản phẩm, tên, giá bán,  số lượng tồn kho và hình ảnh. Nhân viên quản lý sản phẩm, khách truy cập được xem  danh sách sản phẩm.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai02
 * Bảng dữ liệu: products
 * Model Eloquent: Bai02Product
 * Controller: Bai02Controller
 * =========================================================================
 */
class Bai02Controller extends BaseBaiTapController
{
    protected $baiNum = 2;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai02Product::class;
}
