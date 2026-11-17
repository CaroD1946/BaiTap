<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 14: Hệ thống quản lý kho hàng
 * Bảng: inventory_items
 * Database kết nối động: db_bai14
 */
class Bai14InventoryItem extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'inventory_items';
    protected $guarded = [];
}
