<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 50: Hệ thống quản lý bán hàng tổng hợp
 * Bảng dữ liệu: sales_products
 */
class SaleProduct extends Model
{
    use HasFactory;

    protected $table = 'sales_products';
    protected $guarded = [];
}
