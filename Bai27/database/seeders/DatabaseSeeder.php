<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FashionProduct;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "product_code" => "FAS-2701",
                        "name" => "Tên trang phục mẫu #1",
                        "category" => "Áo sơ mi",
                        "size" => "S",
                        "price" => 150000,
                        "stock" => 15
            ],
            [
                        "product_code" => "FAS-2702",
                        "name" => "Tên trang phục mẫu #2",
                        "category" => "Áo thun",
                        "size" => "M",
                        "price" => 300000,
                        "stock" => 20
            ],
            [
                        "product_code" => "FAS-2703",
                        "name" => "Tên trang phục mẫu #3",
                        "category" => "Quần jean",
                        "size" => "L",
                        "price" => 450000,
                        "stock" => 25
            ]
];

        foreach ($samples as $sample) {
            FashionProduct::create($sample);
        }
    }
}
