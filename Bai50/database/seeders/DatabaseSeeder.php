<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SaleProduct;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "product_code" => "SAL-5001",
                        "name" => "Tên mặt hàng kinh doanh mẫu #1",
                        "category" => "Thời trang & Làm đẹp",
                        "price" => 150000,
                        "stock" => 15,
                        "status" => "Đang kinh doanh"
            ],
            [
                        "product_code" => "SAL-5002",
                        "name" => "Tên mặt hàng kinh doanh mẫu #2",
                        "category" => "Đồ điện tử công nghệ",
                        "price" => 300000,
                        "stock" => 20,
                        "status" => "Hết hàng tạm thời"
            ],
            [
                        "product_code" => "SAL-5003",
                        "name" => "Tên mặt hàng kinh doanh mẫu #3",
                        "category" => "Nhà cửa & Đời sống",
                        "price" => 450000,
                        "stock" => 25,
                        "status" => "Ngừng kinh doanh"
            ]
];

        foreach ($samples as $sample) {
            SaleProduct::create($sample);
        }
    }
}
