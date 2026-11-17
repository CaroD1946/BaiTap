<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\Bai01Post;
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ 1. Hệ thống quản lý bài viết tin tức
 * =========================================================================
 * Mô tả: Một tòa soạn cần xây dựng ứng dụng quản lý bài viết. Mỗi bài viết  gồm tiêu đề, nội dung, ảnh đại diện, trạng thái và ngày đăng. Biên tập viên có thể quản  lý bài viết, còn khách truy cập chỉ xem bài viết đã xuất bản.
 * Database riêng biệt (MySQL/phpMyAdmin): db_bai01
 * Bảng dữ liệu: posts
 * Model Eloquent: Bai01Post
 * Controller: Bai01Controller
 * =========================================================================
 */
class Bai01Controller extends BaseBaiTapController
{
    protected $baiNum = 1;

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = Bai01Post::class;
}
