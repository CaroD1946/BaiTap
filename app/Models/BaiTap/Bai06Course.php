<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 6: Hệ thống quản lý khóa học
 * Bảng: courses
 * Database kết nối động: db_bai06
 */
class Bai06Course extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'courses';
    protected $guarded = [];
}
