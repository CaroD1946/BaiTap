<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 12: Hệ thống quản lý sự kiện
 * Bảng: events
 * Database kết nối động: db_bai12
 */
class Bai12Event extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'events';
    protected $guarded = [];
}
