<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 1: Hệ thống quản lý bài viết tin tức
 * Bảng: posts
 * Database kết nối động: db_bai01
 */
class Bai01Post extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'posts';
    protected $guarded = [];
}
