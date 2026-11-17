<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 44: Hệ thống quản lý yêu cầu mua hàng
 * Bảng: purchase_requests
 * Database kết nối động: db_bai44
 */
class Bai44PurchaseRequest extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'purchase_requests';
    protected $guarded = [];
}
