<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 38: Hệ thống quản lý đặt phòng khách sạn
 * Bảng: bookings
 * Database kết nối động: db_bai38
 */
class Bai38Booking extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'bookings';
    protected $guarded = [];
}
