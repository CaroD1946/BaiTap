<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 2: Hệ thống quản lý sản phẩm
 * Bảng: products
 * Database kết nối động: db_bai02
 */
class Bai02Product extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'products';
    protected $guarded = [];
}
