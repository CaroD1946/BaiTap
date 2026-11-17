<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ForumPost;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "title" => "Dữ liệu Tiêu đề thảo luận số 1",
                        "category" => "Hỏi đáp Lập trình",
                        "author_name" => "Tác giả bài đăng mẫu #1",
                        "content" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 46 - mục #1.",
                        "status" => "Đã hiển thị"
            ],
            [
                        "title" => "Dữ liệu Tiêu đề thảo luận số 2",
                        "category" => "Chia sẻ tài liệu",
                        "author_name" => "Tác giả bài đăng mẫu #2",
                        "content" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 46 - mục #2.",
                        "status" => "Chờ kiểm duyệt"
            ],
            [
                        "title" => "Dữ liệu Tiêu đề thảo luận số 3",
                        "category" => "Góc tuyển dụng",
                        "author_name" => "Tác giả bài đăng mẫu #3",
                        "content" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 46 - mục #3.",
                        "status" => "Khóa bình luận"
            ]
];

        foreach ($samples as $sample) {
            ForumPost::create($sample);
        }
    }
}
