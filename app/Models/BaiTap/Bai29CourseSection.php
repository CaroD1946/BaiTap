<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 29: Hệ thống quản lý đăng ký học phần
 * Bảng: course_sections
 * Database kết nối động: db_bai29
 */
class Bai29CourseSection extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'course_sections';
    protected $guarded = [];
}
