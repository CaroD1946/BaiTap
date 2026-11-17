<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 31: Hệ thống quản lý công thức nấu ăn
 * Bảng dữ liệu: recipes
 */
class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';
    protected $guarded = [];
}
