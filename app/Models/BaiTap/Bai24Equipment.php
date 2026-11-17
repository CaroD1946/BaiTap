<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 24: Hệ thống quản lý thiết bị
 * Bảng: equipments
 * Database kết nối động: db_bai24
 */
class Bai24Equipment extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'equipments';
    protected $guarded = [];
}
