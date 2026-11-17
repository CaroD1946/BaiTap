<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Phone;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "phone_code" => "PHO-2601",
                        "phone_name" => "Tên điện thoại mẫu #1",
                        "brand" => "Apple",
                        "price" => 150000,
                        "storage_gb" => "64GB",
                        "stock" => 15
            ],
            [
                        "phone_code" => "PHO-2602",
                        "phone_name" => "Tên điện thoại mẫu #2",
                        "brand" => "Samsung",
                        "price" => 300000,
                        "storage_gb" => "128GB",
                        "stock" => 20
            ],
            [
                        "phone_code" => "PHO-2603",
                        "phone_name" => "Tên điện thoại mẫu #3",
                        "brand" => "Xiaomi",
                        "price" => 450000,
                        "storage_gb" => "256GB",
                        "stock" => 25
            ]
];

        foreach ($samples as $sample) {
            Phone::create($sample);
        }
    }
}
