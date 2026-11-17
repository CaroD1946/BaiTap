<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseSection;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "section_code" => "COU-2901",
                        "course_name" => "Tên môn học mẫu #1",
                        "lecturer" => "Dữ liệu Giảng viên phụ trách số 1",
                        "credits" => 15,
                        "max_students" => 15,
                        "status" => "Đang mở đăng ký"
            ],
            [
                        "section_code" => "COU-2902",
                        "course_name" => "Tên môn học mẫu #2",
                        "lecturer" => "Dữ liệu Giảng viên phụ trách số 2",
                        "credits" => 20,
                        "max_students" => 20,
                        "status" => "Đã đủ sĩ số"
            ],
            [
                        "section_code" => "COU-2903",
                        "course_name" => "Tên môn học mẫu #3",
                        "lecturer" => "Dữ liệu Giảng viên phụ trách số 3",
                        "credits" => 25,
                        "max_students" => 25,
                        "status" => "Đã đóng lớp"
            ]
];

        foreach ($samples as $sample) {
            CourseSection::create($sample);
        }
    }
}
