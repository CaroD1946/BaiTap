<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 1: Hệ thống quản lý bài viết tin tức
 * Bảng dữ liệu: posts
 */
class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $guarded = [];
}
