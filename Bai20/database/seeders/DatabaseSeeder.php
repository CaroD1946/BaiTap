<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "invoice_code" => "INV-2001",
                        "customer_name" => "Tên khách hàng mẫu #1",
                        "created_date" => "2026-11-11",
                        "total_amount" => 150000,
                        "payment_status" => "Chưa thanh toán",
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 20 - mục #1."
            ],
            [
                        "invoice_code" => "INV-2002",
                        "customer_name" => "Tên khách hàng mẫu #2",
                        "created_date" => "2026-11-12",
                        "total_amount" => 300000,
                        "payment_status" => "Đã thanh toán một phần",
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 20 - mục #2."
            ],
            [
                        "invoice_code" => "INV-2003",
                        "customer_name" => "Tên khách hàng mẫu #3",
                        "created_date" => "2026-11-13",
                        "total_amount" => 450000,
                        "payment_status" => "Đã thanh toán đầy đủ",
                        "notes" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 20 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Invoice::create($sample);
        }
    }
}
