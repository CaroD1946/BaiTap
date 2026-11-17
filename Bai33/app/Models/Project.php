<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 33: Hệ thống quản lý dự án phần mềm
 * Bảng dữ liệu: projects
 */
class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $guarded = [];
}
