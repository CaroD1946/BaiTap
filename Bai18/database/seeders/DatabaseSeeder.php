<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Warranty;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "warranty_code" => "WAR-1801",
                        "product_name" => "Tên sản phẩm mẫu #1",
                        "customer_name" => "Tên khách hàng mẫu #1",
                        "received_date" => "2026-11-11",
                        "status" => "Tiếp nhận",
                        "issue_description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 18 - mục #1."
            ],
            [
                        "warranty_code" => "WAR-1802",
                        "product_name" => "Tên sản phẩm mẫu #2",
                        "customer_name" => "Tên khách hàng mẫu #2",
                        "received_date" => "2026-11-12",
                        "status" => "Đang sửa chữa",
                        "issue_description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 18 - mục #2."
            ],
            [
                        "warranty_code" => "WAR-1803",
                        "product_name" => "Tên sản phẩm mẫu #3",
                        "customer_name" => "Tên khách hàng mẫu #3",
                        "received_date" => "2026-11-13",
                        "status" => "Chờ linh kiện",
                        "issue_description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 18 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Warranty::create($sample);
        }
    }
}
