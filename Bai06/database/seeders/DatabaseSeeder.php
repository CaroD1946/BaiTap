<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "course_code" => "LARAVEL101",
                        "name" => "Lập trình Backend chuyên nghiệp với Laravel",
                        "duration_weeks" => 12,
                        "tuition_fee" => 4500000,
                        "status" => "Đang tuyển sinh",
                        "description" => "Nắm vững Eloquent, REST API, Authentication và Kiến trúc MVC."
            ],
            [
                        "course_code" => "REACT201",
                        "name" => "Xây dựng ứng dụng Frontend hiện đại với React 19",
                        "duration_weeks" => 10,
                        "tuition_fee" => 4200000,
                        "status" => "Đang tuyển sinh",
                        "description" => "Thực hành React hooks, State management và tối ưu hóa UI."
            ],
            [
                        "course_code" => "DEVOPS301",
                        "name" => "Triển khai CI/CD và Docker cho dự án thực tế",
                        "duration_weeks" => 8,
                        "tuition_fee" => 3800000,
                        "status" => "Đang học",
                        "description" => "Tự động hóa build, test và deploy lên Cloud server."
            ]
];

        foreach ($samples as $sample) {
            Course::create($sample);
        }
    }
}
