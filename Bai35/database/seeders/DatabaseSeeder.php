<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StockReceipt;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "receipt_code" => "STO-3501",
                        "supplier_name" => "Nhà cung cấp mẫu #1",
                        "receipt_date" => "2026-11-11",
                        "total_quantity" => 15,
                        "total_cost" => 150000,
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 35 - mục #1."
            ],
            [
                        "receipt_code" => "STO-3502",
                        "supplier_name" => "Nhà cung cấp mẫu #2",
                        "receipt_date" => "2026-11-12",
                        "total_quantity" => 20,
                        "total_cost" => 300000,
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 35 - mục #2."
            ],
            [
                        "receipt_code" => "STO-3503",
                        "supplier_name" => "Nhà cung cấp mẫu #3",
                        "receipt_date" => "2026-11-13",
                        "total_quantity" => 25,
                        "total_cost" => 450000,
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 35 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            StockReceipt::create($sample);
        }
    }
}
