<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai46ForumPost;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 46. Hệ thống quản lý bài đăng diễn đàn
 * =========================================================================
 * Mô tả: Một diễn đàn học tập cần quản lý bài đăng gồm tiêu đề, nội dung,  người đăng, danh mục và trạng thái duyệt. Thành viên đăng bài; quản trị viên kiểm  duyệt nội dung.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai46
 * Bảng dữ liệu: forum_posts
 * Model Eloquent: Bai46ForumPost
 * Controller: Bai46Controller
 * =========================================================================
 */
class Bai46Controller extends BaseBaiTapController
{
    protected $baiNum = 46;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai46ForumPost::class;
}
