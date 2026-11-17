<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 34: Hệ thống quản lý khách hàng
 * Bảng: customers
 * Database kết nối động: db_bai34
 */
class Bai34Customer extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'customers';
    protected $guarded = [];
}
