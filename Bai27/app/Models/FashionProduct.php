<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 27: Hệ thống quản lý cửa hàng thời trang
 * Bảng dữ liệu: fashion_products
 */
class FashionProduct extends Model
{
    use HasFactory;

    protected $table = 'fashion_products';
    protected $guarded = [];
}
