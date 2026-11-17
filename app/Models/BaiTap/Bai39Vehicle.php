<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 39: Hệ thống quản lý phương tiện
 * Bảng: vehicles
 * Database kết nối động: db_bai39
 */
class Bai39Vehicle extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'vehicles';
    protected $guarded = [];
}
