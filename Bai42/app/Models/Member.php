<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 42: Hệ thống quản lý đăng ký thành viên
 * Bảng dữ liệu: members
 */
class Member extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $guarded = [];
}
