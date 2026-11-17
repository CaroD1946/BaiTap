<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "patient_code" => "BN2026-001",
                        "fullname" => "Hoàng Minh Trí",
                        "phone" => "0912345678",
                        "birthdate" => "1995-04-12",
                        "gender" => "Nam",
                        "notes" => "Tiền sử viêm họng dị ứng thời tiết, huyết áp ổn định."
            ],
            [
                        "patient_code" => "BN2026-002",
                        "fullname" => "Đỗ Bích Ngọc",
                        "phone" => "0987654321",
                        "birthdate" => "1998-10-25",
                        "gender" => "Nữ",
                        "notes" => "Khám định kỳ răng hàm mặt, không dị ứng thuốc kháng sinh."
            ],
            [
                        "patient_code" => "BN2026-003",
                        "fullname" => "Lâm Quốc Cường",
                        "phone" => "0905112233",
                        "birthdate" => "1982-01-18",
                        "gender" => "Nam",
                        "notes" => "Đau mỏi vai gáy do làm việc văn phòng kéo dài."
            ]
];

        foreach ($samples as $sample) {
            Patient::create($sample);
        }
    }
}
