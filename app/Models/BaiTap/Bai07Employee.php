<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 7: Hệ thống quản lý nhân viên
 * Bảng: employees
 * Database kết nối động: db_bai07
 */
class Bai07Employee extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'employees';
    protected $guarded = [];
}
