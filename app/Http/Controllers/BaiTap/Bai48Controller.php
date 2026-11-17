<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai48ResearchTopic;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 48. Hệ thống quản lý đề tài nghiên cứu khoa học
 * =========================================================================
 * Mô tả: Khoa chuyên môn cần quản lý đề tài nghiên cứu gồm tên đề tài, chủ  nhiệm, lĩnh vực, ngày bắt đầu, ngày kết thúc và trạng thái. Giảng viên đề xuất đề tài;  cán bộ quản lý cập nhật tiến độ.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai48
 * Bảng dữ liệu: research_topics
 * Model Eloquent: Bai48ResearchTopic
 * Controller: Bai48Controller
 * =========================================================================
 */
class Bai48Controller extends BaseBaiTapController
{
    protected $baiNum = 48;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai48ResearchTopic::class;
}
