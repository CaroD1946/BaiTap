<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 21: Hệ thống quản lý bài đăng tuyển cộng tác viên
 * Bảng: collaborator_posts
 * Database kết nối động: db_bai21
 */
class Bai21CollaboratorPost extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'collaborator_posts';
    protected $guarded = [];
}
