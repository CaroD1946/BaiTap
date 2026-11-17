<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 35: Hệ thống quản lý phiếu nhập kho
 * Bảng: stock_receipts
 * Database kết nối động: db_bai35
 */
class Bai35StockReceipt extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'stock_receipts';
    protected $guarded = [];
}
