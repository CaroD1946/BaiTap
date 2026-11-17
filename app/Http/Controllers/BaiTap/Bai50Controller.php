<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai50SaleProduct;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 50. Hệ thống quản lý bán hàng tổng hợp
 * =========================================================================
 * Mô tả: Một cửa hàng cần xây dựng ứng dụng quản lý sản phẩm, danh mục  và đơn hàng. Mỗi sản phẩm thuộc một danh mục; mỗi đơn hàng có thông tin khách  hàng và trạng thái xử lý. Nhân viên quản lý toàn bộ nghiệp vụ; khách chỉ được xem sản  phẩm đang kinh doanh.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai50
 * Bảng dữ liệu: sales_products
 * Model Eloquent: Bai50SaleProduct
 * Controller: Bai50Controller
 * =========================================================================
 */
class Bai50Controller extends BaseBaiTapController
{
    protected $baiNum = 50;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai50SaleProduct::class;
}
