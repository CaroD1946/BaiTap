<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 28: Hệ thống quản lý dịch vụ sửa chữa máy tính
 * Bảng: repair_tickets
 * Database kết nối động: db_bai28
 */
class Bai28RepairTicket extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'repair_tickets';
    protected $guarded = [];
}
