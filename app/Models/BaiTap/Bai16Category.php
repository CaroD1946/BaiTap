<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 16: Hệ thống quản lý danh mục sản phẩm
 * Bảng: categories
 * Database kết nối động: db_bai16
 */
class Bai16Category extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'categories';
    protected $guarded = [];
}
