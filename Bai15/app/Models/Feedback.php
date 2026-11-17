<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 15: Hệ thống quản lý phản hồi khách hàng
 * Bảng dữ liệu: feedbacks
 */
class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';
    protected $guarded = [];
}
