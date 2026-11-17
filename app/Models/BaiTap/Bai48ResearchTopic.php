<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 48: Hệ thống quản lý đề tài nghiên cứu khoa học
 * Bảng: research_topics
 * Database kết nối động: db_bai48
 */
class Bai48ResearchTopic extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'research_topics';
    protected $guarded = [];
}
