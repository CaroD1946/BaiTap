<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "event_name" => "Tên sự kiện mẫu #1",
                        "location" => "12 Đường Lê Lợi, Quận 1, TP.HCM",
                        "event_date" => "2026-11-11",
                        "capacity" => 15,
                        "status" => "Sắp diễn ra",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 12 - mục #1."
            ],
            [
                        "event_name" => "Tên sự kiện mẫu #2",
                        "location" => "24 Đường Lê Lợi, Quận 2, TP.HCM",
                        "event_date" => "2026-11-12",
                        "capacity" => 20,
                        "status" => "Đang diễn ra",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 12 - mục #2."
            ],
            [
                        "event_name" => "Tên sự kiện mẫu #3",
                        "location" => "36 Đường Lê Lợi, Quận 3, TP.HCM",
                        "event_date" => "2026-11-13",
                        "capacity" => 25,
                        "status" => "Đã kết thúc",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 12 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Event::create($sample);
        }
    }
}
