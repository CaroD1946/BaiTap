<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 17: Hệ thống quản lý nhà cung cấp
 * Bảng dữ liệu: suppliers
 */
class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    protected $guarded = [];
}
