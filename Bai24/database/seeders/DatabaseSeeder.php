<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "equipment_code" => "EQU-2401",
                        "name" => "Tên thiết bị mẫu #1",
                        "category" => "Máy tính văn phòng",
                        "purchase_date" => "2026-11-11",
                        "condition_status" => "Hoạt động tốt",
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 24 - mục #1."
            ],
            [
                        "equipment_code" => "EQU-2402",
                        "name" => "Tên thiết bị mẫu #2",
                        "category" => "Máy in / Scan",
                        "purchase_date" => "2026-11-12",
                        "condition_status" => "Cần bảo dưỡng",
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 24 - mục #2."
            ],
            [
                        "equipment_code" => "EQU-2403",
                        "name" => "Tên thiết bị mẫu #3",
                        "category" => "Thiết bị mạng",
                        "purchase_date" => "2026-11-13",
                        "condition_status" => "Hỏng hóc",
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 24 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Equipment::create($sample);
        }
    }
}
