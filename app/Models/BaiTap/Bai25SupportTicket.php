<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 25: Hệ thống quản lý yêu cầu hỗ trợ kỹ thuật
 * Bảng: support_tickets
 * Database kết nối động: db_bai25
 */
class Bai25SupportTicket extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'support_tickets';
    protected $guarded = [];
}
