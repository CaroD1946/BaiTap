<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 11: Hệ thống quản lý công việc
 * Bảng dữ liệu: tasks
 */
class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $guarded = [];
}
