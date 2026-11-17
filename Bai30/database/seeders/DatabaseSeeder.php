<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workshop;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "workshop_name" => "Tên hội thảo / Chuyên đề mẫu #1",
                        "speaker" => "Dữ liệu Diễn giả chính số 1",
                        "event_date" => "2026-11-11",
                        "fee" => 15,
                        "status" => "Mở đăng ký",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 30 - mục #1."
            ],
            [
                        "workshop_name" => "Tên hội thảo / Chuyên đề mẫu #2",
                        "speaker" => "Dữ liệu Diễn giả chính số 2",
                        "event_date" => "2026-11-12",
                        "fee" => 20,
                        "status" => "Sắp hết chỗ",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 30 - mục #2."
            ],
            [
                        "workshop_name" => "Tên hội thảo / Chuyên đề mẫu #3",
                        "speaker" => "Dữ liệu Diễn giả chính số 3",
                        "event_date" => "2026-11-13",
                        "fee" => 25,
                        "status" => "Đã đủ người",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 30 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Workshop::create($sample);
        }
    }
}
