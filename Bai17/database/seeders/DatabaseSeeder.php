<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "supplier_code" => "SUP-1701",
                        "name" => "Tên nhà cung cấp mẫu #1",
                        "phone" => "0917888019",
                        "email" => "user17_1@example.com",
                        "address" => "12 Đường Lê Lợi, Quận 1, TP.HCM",
                        "cooperation_status" => "Đang hợp tác"
            ],
            [
                        "supplier_code" => "SUP-1702",
                        "name" => "Tên nhà cung cấp mẫu #2",
                        "phone" => "0917888029",
                        "email" => "user17_2@example.com",
                        "address" => "24 Đường Lê Lợi, Quận 2, TP.HCM",
                        "cooperation_status" => "Tạm ngưng"
            ],
            [
                        "supplier_code" => "SUP-1703",
                        "name" => "Tên nhà cung cấp mẫu #3",
                        "phone" => "0917888039",
                        "email" => "user17_3@example.com",
                        "address" => "36 Đường Lê Lợi, Quận 3, TP.HCM",
                        "cooperation_status" => "Ngừng hợp tác"
            ]
];

        foreach ($samples as $sample) {
            Supplier::create($sample);
        }
    }
}
