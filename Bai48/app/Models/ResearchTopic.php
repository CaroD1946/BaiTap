<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 48: Hệ thống quản lý đề tài nghiên cứu khoa học
 * Bảng dữ liệu: research_topics
 */
class ResearchTopic extends Model
{
    use HasFactory;

    protected $table = 'research_topics';
    protected $guarded = [];
}
