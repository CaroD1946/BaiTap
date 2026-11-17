<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 22: Hệ thống quản lý tài liệu nội bộ
 * Bảng: documents
 * Database kết nối động: db_bai22
 */
class Bai22Document extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'documents';
    protected $guarded = [];
}
