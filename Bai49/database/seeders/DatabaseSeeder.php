<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InternshipRegistration;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "student_code" => "INT-4901",
                        "student_name" => "Họ tên sinh viên mẫu #1",
                        "company_name" => "Doanh nghiệp tiếp nhận mẫu #1",
                        "internship_role" => "Thực tập sinh Backend",
                        "start_date" => "2026-11-11",
                        "status" => "Chờ khoa duyệt"
            ],
            [
                        "student_code" => "INT-4902",
                        "student_name" => "Họ tên sinh viên mẫu #2",
                        "company_name" => "Doanh nghiệp tiếp nhận mẫu #2",
                        "internship_role" => "Thực tập sinh Frontend",
                        "start_date" => "2026-11-12",
                        "status" => "Đã duyệt tiếp nhận"
            ],
            [
                        "student_code" => "INT-4903",
                        "student_name" => "Họ tên sinh viên mẫu #3",
                        "company_name" => "Doanh nghiệp tiếp nhận mẫu #3",
                        "internship_role" => "Thực tập sinh QA/QC",
                        "start_date" => "2026-11-13",
                        "status" => "Đang thực tập"
            ]
];

        foreach ($samples as $sample) {
            InternshipRegistration::create($sample);
        }
    }
}
