<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 31: Hệ thống quản lý công thức nấu ăn
 * Bảng: recipes
 * Database kết nối động: db_bai31
 */
class Bai31Recipe extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'recipes';
    protected $guarded = [];
}
