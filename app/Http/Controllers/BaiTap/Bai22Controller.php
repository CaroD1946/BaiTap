<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai22Document;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 22. Hệ thống quản lý tài liệu nội bộ
 * =========================================================================
 * Mô tả: Doanh nghiệp cần lưu tài liệu gồm tiêu đề, mô tả, tên tệp, người tải  lên và ngày cập nhật. Nhân viên được xem tài liệu theo quyền; quản trị viên được tải  lên và cập nhật tài liệu.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai22
 * Bảng dữ liệu: documents
 * Model Eloquent: Bai22Document
 * Controller: Bai22Controller
 * =========================================================================
 */
class Bai22Controller extends BaseBaiTapController
{
    protected $baiNum = 22;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai22Document::class;
}
