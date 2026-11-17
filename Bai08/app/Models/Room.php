<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 8: Hệ thống quản lý phòng trọ
 * Bảng dữ liệu: rooms
 */
class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';
    protected $guarded = [];
}
