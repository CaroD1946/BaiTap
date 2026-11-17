<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "room_code" => "P101",
                        "room_type" => "Phòng đơn",
                        "area_m2" => 20,
                        "rent_price" => 2800000,
                        "status" => "Còn trống",
                        "description" => "Có ban công thoáng mát, nóng lạnh, máy lạnh inverter."
            ],
            [
                        "room_code" => "P102",
                        "room_type" => "Studio",
                        "area_m2" => 32,
                        "rent_price" => 4500000,
                        "status" => "Đã cho thuê",
                        "description" => "Full nội thất: giường tủ, máy giặt riêng, bếp từ."
            ],
            [
                        "room_code" => "P201",
                        "room_type" => "Căn hộ mini",
                        "area_m2" => 38,
                        "rent_price" => 5200000,
                        "status" => "Còn trống",
                        "description" => "Gác lửng đúc cao cấp, bãi xe tầng trệt có bảo vệ 24/7."
            ]
];

        foreach ($samples as $sample) {
            Room::create($sample);
        }
    }
}
