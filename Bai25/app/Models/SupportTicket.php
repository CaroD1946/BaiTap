<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 25: Hệ thống quản lý yêu cầu hỗ trợ kỹ thuật
 * Bảng dữ liệu: support_tickets
 */
class SupportTicket extends Model
{
    use HasFactory;

    protected $table = 'support_tickets';
    protected $guarded = [];
}
