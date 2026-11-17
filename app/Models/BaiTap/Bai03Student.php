<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 3: Hệ thống quản lý sinh viên
 * Bảng: students
 * Database kết nối động: db_bai03
 */
class Bai03Student extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'students';
    protected $guarded = [];
}
