<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 20: Hệ thống quản lý hóa đơn
 * Bảng dữ liệu: invoices
 */
class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';
    protected $guarded = [];
}
