<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "order_code" => "DH20261101",
                        "customer_name" => "Lê Văn Hùng",
                        "shipping_address" => "123 Lê Lợi, Quận 1, TP.HCM",
                        "total_amount" => 2500000,
                        "status" => "Chờ xử lý",
                        "order_date" => "2026-11-15"
            ],
            [
                        "order_code" => "DH20261102",
                        "customer_name" => "Nguyễn Thị Thảo",
                        "shipping_address" => "456 Kim Mã, Ba Đình, Hà Nội",
                        "total_amount" => 4800000,
                        "status" => "Đang giao hàng",
                        "order_date" => "2026-11-16"
            ],
            [
                        "order_code" => "DH20261103",
                        "customer_name" => "Trương Minh Tuấn",
                        "shipping_address" => "78 Hùng Vương, Hải Châu, Đà Nẵng",
                        "total_amount" => 1200000,
                        "status" => "Đã hoàn thành",
                        "order_date" => "2026-11-14"
            ]
];

        foreach ($samples as $sample) {
            Order::create($sample);
        }
    }
}
