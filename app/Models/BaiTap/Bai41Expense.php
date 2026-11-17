<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 41: Hệ thống quản lý chi phí dự án
 * Bảng: expenses
 * Database kết nối động: db_bai41
 */
class Bai41Expense extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'expenses';
    protected $guarded = [];
}
