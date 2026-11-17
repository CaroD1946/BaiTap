<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "fullname" => "Họ tên khách hàng mẫu #1",
                        "phone" => "0934888019",
                        "email" => "user34_1@example.com",
                        "customer_source" => "Facebook Ads",
                        "status" => "Khách hàng tiềm năng",
                        "address" => "12 Đường Lê Lợi, Quận 1, TP.HCM"
            ],
            [
                        "fullname" => "Họ tên khách hàng mẫu #2",
                        "phone" => "0934888029",
                        "email" => "user34_2@example.com",
                        "customer_source" => "Google Search",
                        "status" => "Đang tư vấn",
                        "address" => "24 Đường Lê Lợi, Quận 2, TP.HCM"
            ],
            [
                        "fullname" => "Họ tên khách hàng mẫu #3",
                        "phone" => "0934888039",
                        "email" => "user34_3@example.com",
                        "customer_source" => "Giới thiệu bạn bè",
                        "status" => "Đã ký hợp đồng",
                        "address" => "36 Đường Lê Lợi, Quận 3, TP.HCM"
            ]
];

        foreach ($samples as $sample) {
            Customer::create($sample);
        }
    }
}
