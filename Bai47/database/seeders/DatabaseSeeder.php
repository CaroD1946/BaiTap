<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "service_code" => "SER-4701",
                        "service_name" => "Tên gói dịch vụ mẫu #1",
                        "service_type" => "Dịch vụ Lưu trữ Cloud",
                        "price" => 150000,
                        "duration_months" => "1 tháng",
                        "status" => "Đang cung cấp"
            ],
            [
                        "service_code" => "SER-4702",
                        "service_name" => "Tên gói dịch vụ mẫu #2",
                        "service_type" => "Bảo trì phần mềm",
                        "price" => 300000,
                        "duration_months" => "6 tháng",
                        "status" => "Tạm ngừng đăng ký mới"
            ],
            [
                        "service_code" => "SER-4703",
                        "service_name" => "Tên gói dịch vụ mẫu #3",
                        "service_type" => "Thiết kế Website",
                        "price" => 450000,
                        "duration_months" => "12 tháng",
                        "status" => "Đang cung cấp"
            ]
];

        foreach ($samples as $sample) {
            Service::create($sample);
        }
    }
}
