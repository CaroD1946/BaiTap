<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RealEstate;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "title" => "Dữ liệu Tiêu đề tin bất động sản số 1",
                        "property_type" => "Căn hộ chung cư",
                        "address" => "12 Đường Lê Lợi, Quận 1, TP.HCM",
                        "area_m2" => 15,
                        "price_billion" => 150000,
                        "status" => "Đang mở bán"
            ],
            [
                        "title" => "Dữ liệu Tiêu đề tin bất động sản số 2",
                        "property_type" => "Nhà phố liền kề",
                        "address" => "24 Đường Lê Lợi, Quận 2, TP.HCM",
                        "area_m2" => 20,
                        "price_billion" => 300000,
                        "status" => "Đã nhận cọc"
            ],
            [
                        "title" => "Dữ liệu Tiêu đề tin bất động sản số 3",
                        "property_type" => "Biệt thự cao cấp",
                        "address" => "36 Đường Lê Lợi, Quận 3, TP.HCM",
                        "area_m2" => 25,
                        "price_billion" => 450000,
                        "status" => "Đã giao dịch thành công"
            ]
];

        foreach ($samples as $sample) {
            RealEstate::create($sample);
        }
    }
}
