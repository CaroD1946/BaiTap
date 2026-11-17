<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 37: Hệ thống quản lý chương trình khuyến mãi
 * Bảng dữ liệu: promotions
 */
class Promotion extends Model
{
    use HasFactory;

    protected $table = 'promotions';
    protected $guarded = [];
}
