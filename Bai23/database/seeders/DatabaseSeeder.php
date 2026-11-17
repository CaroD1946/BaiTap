<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WorkSchedule;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "employee_name" => "Tên nhân viên mẫu #1",
                        "shift" => "Ca sáng (06:00 - 14:00)",
                        "work_date" => "2026-11-11",
                        "workstation" => "Dữ liệu Khu vực / Bàn làm việc số 1",
                        "status" => "Đã lên lịch",
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 23 - mục #1."
            ],
            [
                        "employee_name" => "Tên nhân viên mẫu #2",
                        "shift" => "Ca chiều (14:00 - 22:00)",
                        "work_date" => "2026-11-12",
                        "workstation" => "Dữ liệu Khu vực / Bàn làm việc số 2",
                        "status" => "Có mặt",
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 23 - mục #2."
            ],
            [
                        "employee_name" => "Tên nhân viên mẫu #3",
                        "shift" => "Ca đêm (22:00 - 06:00)",
                        "work_date" => "2026-11-13",
                        "workstation" => "Dữ liệu Khu vực / Bàn làm việc số 3",
                        "status" => "Đi muộn",
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 23 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            WorkSchedule::create($sample);
        }
    }
}
