<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "job_title" => "Dữ liệu Chức danh tuyển dụng số 1",
                        "department" => "Công nghệ",
                        "salary_range" => "Dữ liệu Mức lương đề xuất số 1",
                        "deadline" => "2026-11-11",
                        "status" => "Đang nhận hồ sơ",
                        "requirements" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 19 - mục #1."
            ],
            [
                        "job_title" => "Dữ liệu Chức danh tuyển dụng số 2",
                        "department" => "Kinh doanh",
                        "salary_range" => "Dữ liệu Mức lương đề xuất số 2",
                        "deadline" => "2026-11-12",
                        "status" => "Đang phỏng vấn",
                        "requirements" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 19 - mục #2."
            ],
            [
                        "job_title" => "Dữ liệu Chức danh tuyển dụng số 3",
                        "department" => "Nhân sự",
                        "salary_range" => "Dữ liệu Mức lương đề xuất số 3",
                        "deadline" => "2026-11-13",
                        "status" => "Đã tuyển đủ",
                        "requirements" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 19 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Job::create($sample);
        }
    }
}
