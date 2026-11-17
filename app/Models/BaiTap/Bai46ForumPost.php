<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 46: Hệ thống quản lý bài đăng diễn đàn
 * Bảng: forum_posts
 * Database kết nối động: db_bai46
 */
class Bai46ForumPost extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'forum_posts';
    protected $guarded = [];
}
