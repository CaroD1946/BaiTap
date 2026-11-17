<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai15Feedback;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 15. Hệ thống quản lý phản hồi khách hàng
 * =========================================================================
 * Mô tả: Doanh nghiệp cần tiếp nhận phản hồi gồm họ tên, email, chủ đề,  nội dung và trạng thái xử lý. Khách gửi phản hồi; nhân viên đăng nhập để xem và cập  nhật trạng thái.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai15
 * Bảng dữ liệu: feedbacks
 * Model Eloquent: Bai15Feedback
 * Controller: Bai15Controller
 * =========================================================================
 */
class Bai15Controller extends BaseBaiTapController
{
    protected $baiNum = 15;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai15Feedback::class;
}
