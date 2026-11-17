<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai16Category;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 16. Hệ thống quản lý danh mục sản phẩm
 * =========================================================================
 * Mô tả: Cửa hàng cần quản lý danh mục sản phẩm gồm tên danh mục, mô  tả và trạng thái. Mỗi danh mục có thể chứa nhiều sản phẩm; danh mục đang được sử  dụng không được xóa tùy tiện.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai16
 * Bảng dữ liệu: categories
 * Model Eloquent: Bai16Category
 * Controller: Bai16Controller
 * =========================================================================
 */
class Bai16Controller extends BaseBaiTapController
{
    protected $baiNum = 16;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai16Category::class;
}
