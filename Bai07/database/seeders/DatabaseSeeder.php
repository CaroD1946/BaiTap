<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "employee_code" => "NV001",
                        "fullname" => "Trần Đình Khang",
                        "email" => "khang.td@company.vn",
                        "department" => "Kỹ thuật phần mềm",
                        "salary" => 22000000,
                        "status" => "Chính thức"
            ],
            [
                        "employee_code" => "NV002",
                        "fullname" => "Lê Thị Thu Hằng",
                        "email" => "hang.lt@company.vn",
                        "department" => "Nhân sự",
                        "salary" => 16000000,
                        "status" => "Chính thức"
            ],
            [
                        "employee_code" => "NV003",
                        "fullname" => "Vũ Anh Tuấn",
                        "email" => "tuan.va@company.vn",
                        "department" => "Kinh doanh",
                        "salary" => 14000000,
                        "status" => "Thử việc"
            ]
];

        foreach ($samples as $sample) {
            Employee::create($sample);
        }
    }
}
