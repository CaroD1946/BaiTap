<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 10: Hệ thống quản lý phòng khám
 * Bảng: patients
 * Database kết nối động: db_bai10
 */
class Bai10Patient extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'patients';
    protected $guarded = [];
}
