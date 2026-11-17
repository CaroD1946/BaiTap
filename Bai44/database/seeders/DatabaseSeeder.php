<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PurchaseRequest;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "request_code" => "PUR-4401",
                        "requester_name" => "Người đề xuất mẫu #1",
                        "item_name" => "Tên mặt hàng cần mua mẫu #1",
                        "quantity" => 15,
                        "estimated_cost" => 150000,
                        "status" => "Chờ phòng thu mua duyệt"
            ],
            [
                        "request_code" => "PUR-4402",
                        "requester_name" => "Người đề xuất mẫu #2",
                        "item_name" => "Tên mặt hàng cần mua mẫu #2",
                        "quantity" => 20,
                        "estimated_cost" => 300000,
                        "status" => "Đang báo giá"
            ],
            [
                        "request_code" => "PUR-4403",
                        "requester_name" => "Người đề xuất mẫu #3",
                        "item_name" => "Tên mặt hàng cần mua mẫu #3",
                        "quantity" => 25,
                        "estimated_cost" => 450000,
                        "status" => "Đã duyệt mua hàng"
            ]
];

        foreach ($samples as $sample) {
            PurchaseRequest::create($sample);
        }
    }
}
