<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResearchTopic;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "topic_code" => "RES-4801",
                        "topic_name" => "Tên đề tài khoa học mẫu #1",
                        "supervisor" => "Dữ liệu Chủ nhiệm đề tài số 1",
                        "field" => "Trí tuệ nhân tạo (AI)",
                        "funding" => 15,
                        "status" => "Đang đăng ký"
            ],
            [
                        "topic_code" => "RES-4802",
                        "topic_name" => "Tên đề tài khoa học mẫu #2",
                        "supervisor" => "Dữ liệu Chủ nhiệm đề tài số 2",
                        "field" => "An toàn thông tin",
                        "funding" => 20,
                        "status" => "Đang thực hiện"
            ],
            [
                        "topic_code" => "RES-4803",
                        "topic_name" => "Tên đề tài khoa học mẫu #3",
                        "supervisor" => "Dữ liệu Chủ nhiệm đề tài số 3",
                        "field" => "Dữ liệu lớn (Big Data)",
                        "funding" => 25,
                        "status" => "Nghiệm thu cấp cơ sở"
            ]
];

        foreach ($samples as $sample) {
            ResearchTopic::create($sample);
        }
    }
}
