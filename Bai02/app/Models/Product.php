<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 2: Hệ thống quản lý sản phẩm
 * Bảng dữ liệu: products
 */
class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = [];
}
