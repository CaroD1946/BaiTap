<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 29: Hệ thống quản lý đăng ký học phần
 * Bảng dữ liệu: course_sections
 */
class CourseSection extends Model
{
    use HasFactory;

    protected $table = 'course_sections';
    protected $guarded = [];
}
