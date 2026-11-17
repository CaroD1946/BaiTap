<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InventoryItem;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "item_code" => "INV-1401",
                        "item_name" => "Tên mặt hàng mẫu #1",
                        "warehouse_location" => "Kho Tổng A",
                        "quantity" => 15,
                        "unit_price" => 150000,
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 14 - mục #1."
            ],
            [
                        "item_code" => "INV-1402",
                        "item_name" => "Tên mặt hàng mẫu #2",
                        "warehouse_location" => "Kho B - Phía Đông",
                        "quantity" => 20,
                        "unit_price" => 300000,
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 14 - mục #2."
            ],
            [
                        "item_code" => "INV-1403",
                        "item_name" => "Tên mặt hàng mẫu #3",
                        "warehouse_location" => "Kho C - Dự phòng",
                        "quantity" => 25,
                        "unit_price" => 450000,
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 14 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            InventoryItem::create($sample);
        }
    }
}
