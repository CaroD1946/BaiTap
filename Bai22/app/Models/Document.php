<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 22: Hệ thống quản lý tài liệu nội bộ
 * Bảng dữ liệu: documents
 */
class Document extends Model
{
    use HasFactory;

    protected $table = 'documents';
    protected $guarded = [];
}
