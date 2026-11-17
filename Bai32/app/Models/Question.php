<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 32: Hệ thống quản lý câu hỏi trắc nghiệm
 * Bảng dữ liệu: questions
 */
class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';
    protected $guarded = [];
}
