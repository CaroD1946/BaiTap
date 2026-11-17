<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 19: Hệ thống quản lý tuyển dụng
 * Bảng dữ liệu: jobs
 */
class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    protected $guarded = [];
}
