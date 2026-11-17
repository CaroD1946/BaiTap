<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 26: Hệ thống quản lý cửa hàng điện thoại
 * Bảng: phones
 * Database kết nối động: db_bai26
 */
class Bai26Phone extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'phones';
    protected $guarded = [];
}
