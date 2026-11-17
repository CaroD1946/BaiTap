<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "student_code" => "SV2026001",
                        "fullname" => "Nguyễn Hoàng Nam",
                        "email" => "nam.nh@student.edu.vn",
                        "birthdate" => "2004-05-14",
                        "class_name" => "CNTT K15A",
                        "gpa" => 3.65
            ],
            [
                        "student_code" => "SV2026002",
                        "fullname" => "Phạm Mai Phương",
                        "email" => "phuong.pm@student.edu.vn",
                        "birthdate" => "2004-09-22",
                        "class_name" => "KTPM K15A",
                        "gpa" => 3.82
            ],
            [
                        "student_code" => "SV2026003",
                        "fullname" => "Trần Quốc Bảo",
                        "email" => "bao.tq@student.edu.vn",
                        "birthdate" => "2003-12-08",
                        "class_name" => "CNTT K15B",
                        "gpa" => 3.2
            ]
];

        foreach ($samples as $sample) {
            Student::create($sample);
        }
    }
}
