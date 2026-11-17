<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 4: Hệ thống quản lý thư viện
 * Bảng: books
 * Database kết nối động: db_bai04
 */
class Bai04Book extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'books';
    protected $guarded = [];
}
