<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 11: Hệ thống quản lý công việc
 * Bảng: tasks
 * Database kết nối động: db_bai11
 */
class Bai11Task extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'tasks';
    protected $guarded = [];
}
