<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 12: Hệ thống quản lý sự kiện
 * Bảng dữ liệu: events
 */
class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $guarded = [];
}
