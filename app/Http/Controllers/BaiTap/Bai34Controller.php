<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai34Customer;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 34. Hệ thống quản lý khách hàng
 * =========================================================================
 * Mô tả: Bộ phận kinh doanh cần quản lý khách hàng gồm họ tên, email, số  điện thoại, địa chỉ và nguồn khách hàng. Nhân viên kinh doanh tra cứu, thêm mới và  cập nhật hồ sơ.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai34
 * Bảng dữ liệu: customers
 * Model Eloquent: Bai34Customer
 * Controller: Bai34Controller
 * =========================================================================
 */
class Bai34Controller extends BaseBaiTapController
{
    protected $baiNum = 34;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai34Customer::class;
}
