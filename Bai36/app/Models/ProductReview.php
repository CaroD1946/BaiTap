<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số 36: Hệ thống quản lý bài đánh giá sản phẩm
 * Bảng dữ liệu: product_reviews
 */
class ProductReview extends Model
{
    use HasFactory;

    protected $table = 'product_reviews';
    protected $guarded = [];
}
