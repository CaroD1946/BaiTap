<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 24: Hệ thống quản lý thiết bị
 * Bảng dữ liệu: equipments
 */
class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipments';
    protected $guarded = [];
}
