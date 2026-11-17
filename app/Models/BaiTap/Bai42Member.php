<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 42: Hệ thống quản lý đăng ký thành viên
 * Bảng: members
 * Database kết nối động: db_bai42
 */
class Bai42Member extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'members';
    protected $guarded = [];
}
