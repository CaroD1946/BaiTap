<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 45: Hệ thống quản lý tài sản doanh nghiệp
 * Bảng dữ liệu: assets
 */
class Asset extends Model
{
    use HasFactory;

    protected $table = 'assets';
    protected $guarded = [];
}
