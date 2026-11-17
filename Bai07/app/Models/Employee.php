<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 7: Hệ thống quản lý nhân viên
 * Bảng dữ liệu: employees
 */
class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $guarded = [];
}
