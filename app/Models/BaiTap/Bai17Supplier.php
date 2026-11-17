<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 17: Hệ thống quản lý nhà cung cấp
 * Bảng: suppliers
 * Database kết nối động: db_bai17
 */
class Bai17Supplier extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'suppliers';
    protected $guarded = [];
}
