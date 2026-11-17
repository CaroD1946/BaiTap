<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 33: Hệ thống quản lý dự án phần mềm
 * Bảng: projects
 * Database kết nối động: db_bai33
 */
class Bai33Project extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'projects';
    protected $guarded = [];
}
