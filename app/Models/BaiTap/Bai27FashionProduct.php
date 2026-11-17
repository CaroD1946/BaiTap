<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 27: Hệ thống quản lý cửa hàng thời trang
 * Bảng: fashion_products
 * Database kết nối động: db_bai27
 */
class Bai27FashionProduct extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'fashion_products';
    protected $guarded = [];
}
