<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 5: Hệ thống quản lý đơn hàng
 * Bảng: orders
 * Database kết nối động: db_bai05
 */
class Bai05Order extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'orders';
    protected $guarded = [];
}
