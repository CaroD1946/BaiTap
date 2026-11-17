<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai17Supplier;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 17. Hệ thống quản lý nhà cung cấp
 * =========================================================================
 * Mô tả: Doanh nghiệp cần lưu thông tin nhà cung cấp gồm mã, tên, email,  số điện thoại, địa chỉ và trạng thái hợp tác. Nhân viên mua hàng quản lý thông tin và  tra cứu nhà cung cấp.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai17
 * Bảng dữ liệu: suppliers
 * Model Eloquent: Bai17Supplier
 * Controller: Bai17Controller
 * =========================================================================
 */
class Bai17Controller extends BaseBaiTapController
{
    protected $baiNum = 17;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai17Supplier::class;
}
