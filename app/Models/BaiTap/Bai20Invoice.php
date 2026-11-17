<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 20: Hệ thống quản lý hóa đơn
 * Bảng: invoices
 * Database kết nối động: db_bai20
 */
class Bai20Invoice extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'invoices';
    protected $guarded = [];
}
