<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 26: Hệ thống quản lý cửa hàng điện thoại
 * Bảng dữ liệu: phones
 */
class Phone extends Model
{
    use HasFactory;

    protected $table = 'phones';
    protected $guarded = [];
}
