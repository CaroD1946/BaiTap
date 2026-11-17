<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "member_code" => "MEM-4201",
                        "fullname" => "Họ và tên thành viên mẫu #1",
                        "email" => "user42_1@example.com",
                        "member_tier" => "Thành viên Chuẩn",
                        "join_date" => "2026-11-11",
                        "status" => "Đang hoạt động"
            ],
            [
                        "member_code" => "MEM-4202",
                        "fullname" => "Họ và tên thành viên mẫu #2",
                        "email" => "user42_2@example.com",
                        "member_tier" => "Bạc (Silver)",
                        "join_date" => "2026-11-12",
                        "status" => "Hết hạn"
            ],
            [
                        "member_code" => "MEM-4203",
                        "fullname" => "Họ và tên thành viên mẫu #3",
                        "email" => "user42_3@example.com",
                        "member_tier" => "Vàng (Gold)",
                        "join_date" => "2026-11-13",
                        "status" => "Tạm khóa"
            ]
];

        foreach ($samples as $sample) {
            Member::create($sample);
        }
    }
}
