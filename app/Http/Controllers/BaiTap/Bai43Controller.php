<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai43RealEstate;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 43. Hệ thống quản lý tin bất động sản
 * =========================================================================
 * Mô tả: Sàn giao dịch cần quản lý tin bất động sản gồm tiêu đề, loại bất  động sản, địa chỉ, diện tích, giá bán và hình ảnh. Khách xem tin; nhân viên quản lý tin  đăng.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai43
 * Bảng dữ liệu: real_estates
 * Model Eloquent: Bai43RealEstate
 * Controller: Bai43Controller
 * =========================================================================
 */
class Bai43Controller extends BaseBaiTapController
{
    protected $baiNum = 43;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai43RealEstate::class;
}
