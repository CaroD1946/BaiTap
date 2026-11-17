<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "license_plate" => "Dữ liệu Biển số xe số 1",
                        "vehicle_type" => "Xe tải nhẹ (1.5 tấn)",
                        "payload_tons" => 15,
                        "inspection_date" => "2026-11-11",
                        "status" => "Sẵn sàng chạy",
                        "driver_name" => "Tài xế phụ trách mẫu #1"
            ],
            [
                        "license_plate" => "Dữ liệu Biển số xe số 2",
                        "vehicle_type" => "Xe tải vừa (5 tấn)",
                        "payload_tons" => 20,
                        "inspection_date" => "2026-11-12",
                        "status" => "Đang chở hàng",
                        "driver_name" => "Tài xế phụ trách mẫu #2"
            ],
            [
                        "license_plate" => "Dữ liệu Biển số xe số 3",
                        "vehicle_type" => "Xe container",
                        "payload_tons" => 25,
                        "inspection_date" => "2026-11-13",
                        "status" => "Đang bảo trì định kỳ",
                        "driver_name" => "Tài xế phụ trách mẫu #3"
            ]
];

        foreach ($samples as $sample) {
            Vehicle::create($sample);
        }
    }
}
