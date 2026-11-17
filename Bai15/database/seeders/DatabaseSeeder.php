<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feedback;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "fullname" => "Họ và tên khách hàng mẫu #1",
                        "email" => "user15_1@example.com",
                        "subject" => "Dữ liệu Chủ đề phản hồi số 1",
                        "rating" => "1 Sao",
                        "status" => "Chờ tiếp nhận",
                        "content" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 15 - mục #1."
            ],
            [
                        "fullname" => "Họ và tên khách hàng mẫu #2",
                        "email" => "user15_2@example.com",
                        "subject" => "Dữ liệu Chủ đề phản hồi số 2",
                        "rating" => "2 Sao",
                        "status" => "Đang xử lý",
                        "content" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 15 - mục #2."
            ],
            [
                        "fullname" => "Họ và tên khách hàng mẫu #3",
                        "email" => "user15_3@example.com",
                        "subject" => "Dữ liệu Chủ đề phản hồi số 3",
                        "rating" => "3 Sao",
                        "status" => "Đã phản hồi",
                        "content" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 15 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Feedback::create($sample);
        }
    }
}
