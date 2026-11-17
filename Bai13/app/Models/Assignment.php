<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 13: Hệ thống quản lý bài tập trực tuyến
 * Bảng dữ liệu: assignments
 */
class Assignment extends Model
{
    use HasFactory;

    protected $table = 'assignments';
    protected $guarded = [];
}
