<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai32Question;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 32. Hệ thống quản lý câu hỏi trắc nghiệm
 * =========================================================================
 * Mô tả: Giảng viên cần quản lý câu hỏi gồm nội dung, bốn phương án trả  lời, đáp án đúng và mức độ khó. Sinh viên xem câu hỏi theo chế độ luyện tập; giảng  viên quản lý ngân hàng câu hỏi.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai32
 * Bảng dữ liệu: questions
 * Model Eloquent: Bai32Question
 * Controller: Bai32Controller
 * =========================================================================
 */
class Bai32Controller extends BaseBaiTapController
{
    protected $baiNum = 32;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai32Question::class;
}
