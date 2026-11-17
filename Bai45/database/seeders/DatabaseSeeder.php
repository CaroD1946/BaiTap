<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asset;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "asset_code" => "ASS-4501",
                        "asset_name" => "Tên tài sản mẫu #1",
                        "department" => "Ban Giám Đốc",
                        "purchase_date" => "2026-11-11",
                        "original_value" => 15,
                        "status" => "Đang sử dụng tốt"
            ],
            [
                        "asset_code" => "ASS-4502",
                        "asset_name" => "Tên tài sản mẫu #2",
                        "department" => "Phòng Kỹ Thuật",
                        "purchase_date" => "2026-11-12",
                        "original_value" => 20,
                        "status" => "Cần bảo trì"
            ],
            [
                        "asset_code" => "ASS-4503",
                        "asset_name" => "Tên tài sản mẫu #3",
                        "department" => "Phòng Kế Toán",
                        "purchase_date" => "2026-11-13",
                        "original_value" => 25,
                        "status" => "Chờ sửa chữa"
            ]
];

        foreach ($samples as $sample) {
            Asset::create($sample);
        }
    }
}
