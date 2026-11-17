<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CollaboratorPost;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "title" => "Dữ liệu Tiêu đề tin tuyển CTV số 1",
                        "position" => "Viết bài Content",
                        "compensation" => "Dữ liệu Mức thù lao / sản phẩm số 1",
                        "deadline" => "2026-11-11",
                        "status" => "Đang tuyển",
                        "details" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 21 - mục #1."
            ],
            [
                        "title" => "Dữ liệu Tiêu đề tin tuyển CTV số 2",
                        "position" => "Thiết kế đồ họa",
                        "compensation" => "Dữ liệu Mức thù lao / sản phẩm số 2",
                        "deadline" => "2026-11-12",
                        "status" => "Tạm dừng",
                        "details" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 21 - mục #2."
            ],
            [
                        "title" => "Dữ liệu Tiêu đề tin tuyển CTV số 3",
                        "position" => "Dịch thuật",
                        "compensation" => "Dữ liệu Mức thù lao / sản phẩm số 3",
                        "deadline" => "2026-11-13",
                        "status" => "Đã kết thúc",
                        "details" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 21 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            CollaboratorPost::create($sample);
        }
    }
}
