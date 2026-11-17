<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 3: Hệ thống quản lý sinh viên
 * Bảng dữ liệu: students
 */
class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $guarded = [];
}
