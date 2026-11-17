<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 10: Hệ thống quản lý phòng khám
 * Bảng dữ liệu: patients
 */
class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';
    protected $guarded = [];
}
