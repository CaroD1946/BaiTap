<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 37: Hệ thống quản lý chương trình khuyến mãi
 * Bảng: promotions
 * Database kết nối động: db_bai37
 */
class Bai37Promotion extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'promotions';
    protected $guarded = [];
}
