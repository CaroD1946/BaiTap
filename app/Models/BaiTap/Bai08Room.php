<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 8: Hệ thống quản lý phòng trọ
 * Bảng: rooms
 * Database kết nối động: db_bai08
 */
class Bai08Room extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'rooms';
    protected $guarded = [];
}
