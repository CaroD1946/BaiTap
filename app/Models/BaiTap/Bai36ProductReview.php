<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số 36: Hệ thống quản lý bài đánh giá sản phẩm
 * Bảng: product_reviews
 * Database kết nối động: db_bai36
 */
class Bai36ProductReview extends Model
{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = 'product_reviews';
    protected $guarded = [];
}
