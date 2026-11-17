<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 18: Hệ thống quản lý phiếu bảo hành
 * Bảng: warranties
 * Database kết nối động: db_bai18
 */
class Bai18Warranty extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'warranties';
    protected $guarded = [];
}
