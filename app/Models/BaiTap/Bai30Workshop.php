<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 30: Hệ thống quản lý đăng ký hội thảo
 * Bảng: workshops
 * Database kết nối động: db_bai30
 */
class Bai30Workshop extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'workshops';
    protected $guarded = [];
}
