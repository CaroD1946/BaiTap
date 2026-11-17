<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai21CollaboratorPost;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 21. Hệ thống quản lý bài đăng tuyển cộng tác viên
 * =========================================================================
 * Mô tả: Một đơn vị cần đăng thông tin tuyển cộng tác viên gồm vị trí, mô  tả công việc, thù lao và hạn đăng ký. Người xem có thể tra cứu; quản trị viên quản lý  bài đăng.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai21
 * Bảng dữ liệu: collaborator_posts
 * Model Eloquent: Bai21CollaboratorPost
 * Controller: Bai21Controller
 * =========================================================================
 */
class Bai21Controller extends BaseBaiTapController
{
    protected $baiNum = 21;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai21CollaboratorPost::class;
}
