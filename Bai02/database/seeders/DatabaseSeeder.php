<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "product_code" => "SP001",
                        "name" => "iPhone 15 Pro Max 256GB",
                        "category" => "Điện thoại",
                        "price" => 29990000,
                        "stock" => 15,
                        "description" => "Thiết kế titan cao cấp, chip A17 Pro mạnh mẽ."
            ],
            [
                        "product_code" => "SP002",
                        "name" => "MacBook Air M3 16GB",
                        "category" => "Laptop",
                        "price" => 32500000,
                        "stock" => 8,
                        "description" => "Mỏng nhẹ, thời lượng pin lên đến 18 tiếng liên tục."
            ],
            [
                        "product_code" => "SP003",
                        "name" => "Tai nghe AirPods Pro 2",
                        "category" => "Phụ kiện",
                        "price" => 5490000,
                        "stock" => 25,
                        "description" => "Chống ồn chủ động vượt trội, âm thanh vòm sống động."
            ]
];

        foreach ($samples as $sample) {
            Product::create($sample);
        }
    }
}
