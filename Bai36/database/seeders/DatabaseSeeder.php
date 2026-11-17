<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductReview;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "product_name" => "Tên sản phẩm đánh giá mẫu #1",
                        "reviewer_name" => "Người đánh giá mẫu #1",
                        "rating_stars" => "1 Sao (Rất tệ)",
                        "comment" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 36 - mục #1.",
                        "status" => "Chờ duyệt"
            ],
            [
                        "product_name" => "Tên sản phẩm đánh giá mẫu #2",
                        "reviewer_name" => "Người đánh giá mẫu #2",
                        "rating_stars" => "2 Sao (Tạm ổn)",
                        "comment" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 36 - mục #2.",
                        "status" => "Đã duyệt hiển thị"
            ],
            [
                        "product_name" => "Tên sản phẩm đánh giá mẫu #3",
                        "reviewer_name" => "Người đánh giá mẫu #3",
                        "rating_stars" => "3 Sao (Bình thường)",
                        "comment" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 36 - mục #3.",
                        "status" => "Đã ẩn do vi phạm"
            ]
];

        foreach ($samples as $sample) {
            ProductReview::create($sample);
        }
    }
}
