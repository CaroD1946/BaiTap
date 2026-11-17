<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assignment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "title" => "Dữ liệu Tiêu đề bài tập số 1",
                        "course_name" => "Lập trình Web",
                        "deadline" => "2026-11-11",
                        "max_score" => 15,
                        "status" => "Đang mở",
                        "content" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 13 - mục #1."
            ],
            [
                        "title" => "Dữ liệu Tiêu đề bài tập số 2",
                        "course_name" => "Cơ sở dữ liệu",
                        "deadline" => "2026-11-12",
                        "max_score" => 20,
                        "status" => "Đã đóng",
                        "content" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 13 - mục #2."
            ],
            [
                        "title" => "Dữ liệu Tiêu đề bài tập số 3",
                        "course_name" => "Cấu trúc dữ liệu",
                        "deadline" => "2026-11-13",
                        "max_score" => 25,
                        "status" => "Đã chấm điểm",
                        "content" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 13 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Assignment::create($sample);
        }
    }
}
