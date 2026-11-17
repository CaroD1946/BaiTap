<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 34: Hệ thống quản lý khách hàng
 * Bảng dữ liệu: customers
 */
class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $guarded = [];
}
