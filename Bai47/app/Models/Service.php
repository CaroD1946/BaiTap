<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 47: Hệ thống quản lý đăng ký dịch vụ
 * Bảng dữ liệu: services
 */
class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $guarded = [];
}
