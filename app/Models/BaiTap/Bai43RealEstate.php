<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 43: Hệ thống quản lý tin bất động sản
 * Bảng: real_estates
 * Database kết nối động: db_bai43
 */
class Bai43RealEstate extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'real_estates';
    protected $guarded = [];
}
