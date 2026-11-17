<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 16: Hệ thống quản lý danh mục sản phẩm
 * Bảng dữ liệu: categories
 */
class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $guarded = [];
}
