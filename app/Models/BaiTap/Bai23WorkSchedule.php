<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 23: Hệ thống quản lý lịch làm việc
 * Bảng: work_schedules
 * Database kết nối động: db_bai23
 */
class Bai23WorkSchedule extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'work_schedules';
    protected $guarded = [];
}
