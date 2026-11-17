<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 49: Hệ thống quản lý đăng ký thực tập
 * Bảng dữ liệu: internships
 */
class InternshipRegistration extends Model
{
    use HasFactory;

    protected $table = 'internships';
    protected $guarded = [];
}
