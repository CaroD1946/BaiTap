<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 14: Hệ thống quản lý kho hàng
 * Bảng dữ liệu: inventory_items
 */
class InventoryItem extends Model
{
    use HasFactory;

    protected $table = 'inventory_items';
    protected $guarded = [];
}
