<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RepairTicket;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "ticket_code" => "REP-2801",
                        "customer_name" => "Họ tên khách hàng mẫu #1",
                        "device_model" => "Dữ liệu Tên dòng máy / Laptop số 1",
                        "estimated_cost" => 150000,
                        "status" => "Tiếp nhận",
                        "defect_description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 28 - mục #1."
            ],
            [
                        "ticket_code" => "REP-2802",
                        "customer_name" => "Họ tên khách hàng mẫu #2",
                        "device_model" => "Dữ liệu Tên dòng máy / Laptop số 2",
                        "estimated_cost" => 300000,
                        "status" => "Đang kiểm tra",
                        "defect_description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 28 - mục #2."
            ],
            [
                        "ticket_code" => "REP-2803",
                        "customer_name" => "Họ tên khách hàng mẫu #3",
                        "device_model" => "Dữ liệu Tên dòng máy / Laptop số 3",
                        "estimated_cost" => 450000,
                        "status" => "Chờ linh kiện thay thế",
                        "defect_description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 28 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            RepairTicket::create($sample);
        }
    }
}
