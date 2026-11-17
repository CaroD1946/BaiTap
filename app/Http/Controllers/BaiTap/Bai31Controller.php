<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai31Recipe;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 31. Hệ thống quản lý công thức nấu ăn
 * =========================================================================
 * Mô tả: Một website ẩm thực cần quản lý công thức gồm tên món, nguyên  liệu, cách chế biến, thời gian nấu và ảnh minh họa. Khách xem công thức; quản trị viên  quản lý nội dung.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai31
 * Bảng dữ liệu: recipes
 * Model Eloquent: Bai31Recipe
 * Controller: Bai31Controller
 * =========================================================================
 */
class Bai31Controller extends BaseBaiTapController
{
    protected $baiNum = 31;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai31Recipe::class;
}
