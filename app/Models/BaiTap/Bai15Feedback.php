<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 15: Hệ thống quản lý phản hồi khách hàng
 * Bảng: feedbacks
 * Database kết nối động: db_bai15
 */
class Bai15Feedback extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'feedbacks';
    protected $guarded = [];
}
