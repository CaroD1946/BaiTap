<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 19: Hệ thống quản lý tuyển dụng
 * Bảng: jobs
 * Database kết nối động: db_bai19
 */
class Bai19Job extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'jobs';
    protected $guarded = [];
}
