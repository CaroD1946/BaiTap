<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 40: Hệ thống quản lý lịch hẹn
 * Bảng dữ liệu: appointments
 */
class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    protected $guarded = [];
}
