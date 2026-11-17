<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 44: Hệ thống quản lý yêu cầu mua hàng
 * Bảng dữ liệu: purchase_requests
 */
class PurchaseRequest extends Model
{
    use HasFactory;

    protected $table = 'purchase_requests';
    protected $guarded = [];
}
