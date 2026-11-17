<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 13: Hệ thống quản lý bài tập trực tuyến
 * Bảng: assignments
 * Database kết nối động: db_bai13
 */
class Bai13Assignment extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'assignments';
    protected $guarded = [];
}
