<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "project_name" => "Tên dự án phần mềm mẫu #1",
                        "leader_name" => "Trưởng dự án (PM) mẫu #1",
                        "start_date" => "2026-11-11",
                        "deadline" => "2026-11-11",
                        "budget" => 150000,
                        "status" => "Khởi tạo"
            ],
            [
                        "project_name" => "Tên dự án phần mềm mẫu #2",
                        "leader_name" => "Trưởng dự án (PM) mẫu #2",
                        "start_date" => "2026-11-12",
                        "deadline" => "2026-11-12",
                        "budget" => 300000,
                        "status" => "Đang phát triển"
            ],
            [
                        "project_name" => "Tên dự án phần mềm mẫu #3",
                        "leader_name" => "Trưởng dự án (PM) mẫu #3",
                        "start_date" => "2026-11-13",
                        "deadline" => "2026-11-13",
                        "budget" => 450000,
                        "status" => "Đang kiểm thử (QA)"
            ]
];

        foreach ($samples as $sample) {
            Project::create($sample);
        }
    }
}
