<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 6: Hệ thống quản lý khóa học
 * Bảng dữ liệu: courses
 */
class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $guarded = [];
}
