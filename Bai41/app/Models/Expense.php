<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 41: Hệ thống quản lý chi phí dự án
 * Bảng dữ liệu: expenses
 */
class Expense extends Model
{
    use HasFactory;

    protected $table = 'expenses';
    protected $guarded = [];
}
