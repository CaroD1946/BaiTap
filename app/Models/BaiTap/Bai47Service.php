<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 47: Hệ thống quản lý đăng ký dịch vụ
 * Bảng: services
 * Database kết nối động: db_bai47
 */
class Bai47Service extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'services';
    protected $guarded = [];
}
