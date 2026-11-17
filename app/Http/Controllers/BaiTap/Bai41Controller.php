<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai41Expense;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 41. Hệ thống quản lý chi phí dự án
 * =========================================================================
 * Mô tả: Nhóm dự án cần theo dõi chi phí gồm tên khoản chi, số tiền, ngày  phát sinh, người đề xuất và trạng thái phê duyệt. Nhân viên nhập khoản chi; quản lý  phê duyệt.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai41
 * Bảng dữ liệu: expenses
 * Model Eloquent: Bai41Expense
 * Controller: Bai41Controller
 * =========================================================================
 */
class Bai41Controller extends BaseBaiTapController
{
    protected $baiNum = 41;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai41Expense::class;
}
