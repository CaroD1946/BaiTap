<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 49: Hệ thống quản lý đăng ký thực tập
 * Bảng: internships
 * Database kết nối động: db_bai49
 */
class Bai49InternshipRegistration extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'internships';
    protected $guarded = [];
}
