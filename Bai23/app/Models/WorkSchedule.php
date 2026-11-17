<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 23: Hệ thống quản lý lịch làm việc
 * Bảng dữ liệu: work_schedules
 */
class WorkSchedule extends Model
{
    use HasFactory;

    protected $table = 'work_schedules';
    protected $guarded = [];
}
