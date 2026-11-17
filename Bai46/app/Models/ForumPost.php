<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 46: Hệ thống quản lý bài đăng diễn đàn
 * Bảng dữ liệu: forum_posts
 */
class ForumPost extends Model
{
    use HasFactory;

    protected $table = 'forum_posts';
    protected $guarded = [];
}
