<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai44PurchaseRequest;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 44. Hệ thống quản lý yêu cầu mua hàng
 * =========================================================================
 * Mô tả: Doanh nghiệp cần quản lý yêu cầu mua hàng gồm người đề xuất,  tên mặt hàng, số lượng, đơn giá dự kiến và trạng thái phê duyệt. Nhân viên gửi yêu cầu;  quản lý phê duyệt.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai44
 * Bảng dữ liệu: purchase_requests
 * Model Eloquent: Bai44PurchaseRequest
 * Controller: Bai44Controller
 * =========================================================================
 */
class Bai44Controller extends BaseBaiTapController
{
    protected $baiNum = 44;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai44PurchaseRequest::class;
}
