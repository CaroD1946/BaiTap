<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai36ProductReview;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 36. Hệ thống quản lý bài đánh giá sản phẩm
 * =========================================================================
 * Mô tả: Website bán hàng cần quản lý đánh giá sản phẩm gồm sản phẩm,  người đánh giá, số sao, nội dung và trạng thái duyệt. Khách gửi đánh giá; quản trị viên  duyệt trước khi hiển thị công khai.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai36
 * Bảng dữ liệu: product_reviews
 * Model Eloquent: Bai36ProductReview
 * Controller: Bai36Controller
 * =========================================================================
 */
class Bai36Controller extends BaseBaiTapController
{
    protected $baiNum = 36;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai36ProductReview::class;
}
