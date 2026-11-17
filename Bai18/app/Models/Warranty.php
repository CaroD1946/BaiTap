<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 18: Hệ thống quản lý phiếu bảo hành
 * Bảng dữ liệu: warranties
 */
class Warranty extends Model
{
    use HasFactory;

    protected $table = 'warranties';
    protected $guarded = [];
}
