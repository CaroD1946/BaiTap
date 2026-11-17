<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "customer_name" => "Tên khách hàng mẫu #1",
                        "phone" => "0940888019",
                        "service_name" => "Khám sức khỏe tổng quát",
                        "appointment_date" => "2026-11-11",
                        "appointment_time" => "08:30 - 09:30",
                        "status" => "Đã đặt hẹn"
            ],
            [
                        "customer_name" => "Tên khách hàng mẫu #2",
                        "phone" => "0940888029",
                        "service_name" => "Tư vấn tài chính",
                        "appointment_date" => "2026-11-12",
                        "appointment_time" => "10:00 - 11:00",
                        "status" => "Đã xác nhận điện thoại"
            ],
            [
                        "customer_name" => "Tên khách hàng mẫu #3",
                        "phone" => "0940888039",
                        "service_name" => "Chăm sóc da spa",
                        "appointment_date" => "2026-11-13",
                        "appointment_time" => "14:00 - 15:00",
                        "status" => "Khách đã đến"
            ]
];

        foreach ($samples as $sample) {
            Appointment::create($sample);
        }
    }
}
