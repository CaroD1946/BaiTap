<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 35: Hệ thống quản lý phiếu nhập kho
 * Bảng dữ liệu: stock_receipts
 */
class StockReceipt extends Model
{
    use HasFactory;

    protected $table = 'stock_receipts';
    protected $guarded = [];
}
