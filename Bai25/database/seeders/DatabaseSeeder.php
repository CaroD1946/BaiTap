<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupportTicket;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "ticket_code" => "SUP-2501",
                        "requester_name" => "Người yêu cầu mẫu #1",
                        "issue_type" => "Sự cố phần mềm",
                        "priority" => "Thấp",
                        "status" => "Mới tiếp nhận",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 25 - mục #1."
            ],
            [
                        "ticket_code" => "SUP-2502",
                        "requester_name" => "Người yêu cầu mẫu #2",
                        "issue_type" => "Hỏng phần cứng",
                        "priority" => "Trung bình",
                        "status" => "Đang xử lý",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 25 - mục #2."
            ],
            [
                        "ticket_code" => "SUP-2503",
                        "requester_name" => "Người yêu cầu mẫu #3",
                        "issue_type" => "Mất kết nối mạng",
                        "priority" => "Cao",
                        "status" => "Chờ phản hồi",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 25 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            SupportTicket::create($sample);
        }
    }
}
