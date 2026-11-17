<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 21: Hệ thống quản lý bài đăng tuyển cộng tác viên
 * Bảng dữ liệu: collaborator_posts
 */
class CollaboratorPost extends Model
{
    use HasFactory;

    protected $table = 'collaborator_posts';
    protected $guarded = [];
}
