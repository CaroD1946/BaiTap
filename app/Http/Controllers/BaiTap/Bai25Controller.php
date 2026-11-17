<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai25SupportTicket;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 25. Hệ thống quản lý yêu cầu hỗ trợ kỹ thuật
 * =========================================================================
 * Mô tả: Một trung tâm CNTT tiếp nhận yêu cầu hỗ trợ gồm người gửi, tiêu  đề, nội dung, mức độ ưu tiên và trạng thái. Người dùng gửi yêu cầu; nhân viên kỹ thuật  xử lý và cập nhật tiến độ.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai25
 * Bảng dữ liệu: support_tickets
 * Model Eloquent: Bai25SupportTicket
 * Controller: Bai25Controller
 * =========================================================================
 */
class Bai25Controller extends BaseBaiTapController
{
    protected $baiNum = 25;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai25SupportTicket::class;
}
