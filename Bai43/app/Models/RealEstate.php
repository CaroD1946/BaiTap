<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 43: Hệ thống quản lý tin bất động sản
 * Bảng dữ liệu: real_estates
 */
class RealEstate extends Model
{
    use HasFactory;

    protected $table = 'real_estates';
    protected $guarded = [];
}
