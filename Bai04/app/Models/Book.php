<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 4: Hệ thống quản lý thư viện
 * Bảng dữ liệu: books
 */
class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $guarded = [];
}
