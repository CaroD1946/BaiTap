<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai26Phone;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 26. Hệ thống quản lý cửa hàng điện thoại
 * =========================================================================
 * Mô tả: Cửa hàng cần quản lý điện thoại gồm tên máy, thương hiệu, giá bán,  số lượng tồn kho và ảnh sản phẩm. Khách xem sản phẩm; nhân viên quản lý danh mục.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai26
 * Bảng dữ liệu: phones
 * Model Eloquent: Bai26Phone
 * Controller: Bai26Controller
 * =========================================================================
 */
class Bai26Controller extends BaseBaiTapController
{
    protected $baiNum = 26;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai26Phone::class;
}
