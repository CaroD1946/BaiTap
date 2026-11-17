<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 5: Hệ thống quản lý đơn hàng
 * Bảng dữ liệu: orders
 */
class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $guarded = [];
}
