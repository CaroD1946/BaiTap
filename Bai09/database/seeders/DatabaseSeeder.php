<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "item_name" => "Phở Bò Tái Lăn Hà Nội",
                        "category" => "Món chính",
                        "price" => 65000,
                        "is_available" => "Đang phục vụ",
                        "description" => "Bò xào tái lăn thơm mùi tỏi, nước dùng ninh từ xương ống 12 tiếng."
            ],
            [
                        "item_name" => "Gỏi Cuốn Tôm Thịt",
                        "category" => "Khai vị",
                        "price" => 45000,
                        "is_available" => "Đang phục vụ",
                        "description" => "Kèm nước chấm tương đen đậu phộng chuẩn vị miền Nam."
            ],
            [
                        "item_name" => "Trà Đào Cam Sả",
                        "category" => "Đồ uống",
                        "price" => 38000,
                        "is_available" => "Đang phục vụ",
                        "description" => "Hương vị thanh mát, đào miếng giòn ngọt mát lạnh."
            ]
];

        foreach ($samples as $sample) {
            MenuItem::create($sample);
        }
    }
}
