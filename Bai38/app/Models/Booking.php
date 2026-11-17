<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 38: Hệ thống quản lý đặt phòng khách sạn
 * Bảng dữ liệu: bookings
 */
class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';
    protected $guarded = [];
}
