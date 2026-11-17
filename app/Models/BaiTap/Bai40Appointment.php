<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 40: Hệ thống quản lý lịch hẹn
 * Bảng: appointments
 * Database kết nối động: db_bai40
 */
class Bai40Appointment extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'appointments';
    protected $guarded = [];
}
