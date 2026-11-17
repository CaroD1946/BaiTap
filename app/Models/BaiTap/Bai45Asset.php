<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 45: Hệ thống quản lý tài sản doanh nghiệp
 * Bảng: assets
 * Database kết nối động: db_bai45
 */
class Bai45Asset extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'assets';
    protected $guarded = [];
}
