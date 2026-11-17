<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 50: Hệ thống quản lý bán hàng tổng hợp
 * Bảng: sales_products
 * Database kết nối động: db_bai50
 */
class Bai50SaleProduct extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'sales_products';
    protected $guarded = [];
}
