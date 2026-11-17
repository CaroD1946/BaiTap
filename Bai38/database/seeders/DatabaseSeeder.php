<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "booking_code" => "BOO-3801",
                        "guest_name" => "Tên khách lưu trú mẫu #1",
                        "room_type" => "Standard",
                        "checkin_date" => "2026-11-11",
                        "checkout_date" => "2026-11-11",
                        "status" => "Đã xác nhận"
            ],
            [
                        "booking_code" => "BOO-3802",
                        "guest_name" => "Tên khách lưu trú mẫu #2",
                        "room_type" => "Deluxe Room",
                        "checkin_date" => "2026-11-12",
                        "checkout_date" => "2026-11-12",
                        "status" => "Đã cọc tiền"
            ],
            [
                        "booking_code" => "BOO-3803",
                        "guest_name" => "Tên khách lưu trú mẫu #3",
                        "room_type" => "Suite Cao Cấp",
                        "checkin_date" => "2026-11-13",
                        "checkout_date" => "2026-11-13",
                        "status" => "Đã nhận phòng (Check-in)"
            ]
];

        foreach ($samples as $sample) {
            Booking::create($sample);
        }
    }
}
