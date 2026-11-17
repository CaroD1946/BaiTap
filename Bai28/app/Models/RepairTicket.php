<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 28: Hệ thống quản lý dịch vụ sửa chữa máy tính
 * Bảng dữ liệu: repair_tickets
 */
class RepairTicket extends Model
{
    use HasFactory;

    protected $table = 'repair_tickets';
    protected $guarded = [];
}
