<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 30: Hệ thống quản lý đăng ký hội thảo
 * Bảng dữ liệu: workshops
 */
class Workshop extends Model
{
    use HasFactory;

    protected $table = 'workshops';
    protected $guarded = [];
}
