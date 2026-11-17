<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Promotion;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "promo_code" => "PRO-3701",
                        "promo_name" => "Tên chương trình mẫu #1",
                        "discount_percent" => 15,
                        "start_date" => "2026-11-11",
                        "end_date" => "2026-11-11",
                        "status" => "Đang kích hoạt"
            ],
            [
                        "promo_code" => "PRO-3702",
                        "promo_name" => "Tên chương trình mẫu #2",
                        "discount_percent" => 20,
                        "start_date" => "2026-11-12",
                        "end_date" => "2026-11-12",
                        "status" => "Sắp diễn ra"
            ],
            [
                        "promo_code" => "PRO-3703",
                        "promo_name" => "Tên chương trình mẫu #3",
                        "discount_percent" => 25,
                        "start_date" => "2026-11-13",
                        "end_date" => "2026-11-13",
                        "status" => "Đã hết hạn"
            ]
];

        foreach ($samples as $sample) {
            Promotion::create($sample);
        }
    }
}
