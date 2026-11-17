<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 32: Hệ thống quản lý câu hỏi trắc nghiệm
 * Bảng: questions
 * Database kết nối động: db_bai32
 */
class Bai32Question extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'questions';
    protected $guarded = [];
}
