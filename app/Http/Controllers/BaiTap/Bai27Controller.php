<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai27FashionProduct;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 27. Hệ thống quản lý cửa hàng thời trang
 * =========================================================================
 * Mô tả: Cửa hàng cần quản lý quần áo gồm tên sản phẩm, loại trang phục,  kích cỡ, màu sắc, giá và hình ảnh. Khách xem sản phẩm; nhân viên quản lý dữ liệu.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai27
 * Bảng dữ liệu: fashion_products
 * Model Eloquent: Bai27FashionProduct
 * Controller: Bai27Controller
 * =========================================================================
 */
class Bai27Controller extends BaseBaiTapController
{
    protected $baiNum = 27;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai27FashionProduct::class;
}
