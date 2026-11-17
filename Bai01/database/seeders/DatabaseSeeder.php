<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "title" => "Trí tuệ nhân tạo phát triển mạnh mẽ năm 2026",
                        "category" => "Công nghệ",
                        "author" => "Nguyễn Văn An",
                        "content" => "AI đang thay đổi toàn bộ các ngành công nghiệp từ y tế, giáo dục đến sản xuất.",
                        "status" => "Đã xuất bản",
                        "published_at" => "2026-11-10"
            ],
            [
                        "title" => "Thị trường công nghệ xanh thu hút vốn đầu tư lớn",
                        "category" => "Kinh tế",
                        "author" => "Trần Thị Bình",
                        "content" => "Năng lượng tái tạo và xe điện dẫn đầu các dự án khởi nghiệp sáng tạo.",
                        "status" => "Đã xuất bản",
                        "published_at" => "2026-11-12"
            ],
            [
                        "title" => "Đội tuyển trẻ giành cúp vô địch châu lục",
                        "category" => "Thể thao",
                        "author" => "Lê Hoàng",
                        "content" => "Chiến thắng thuyết phục với tỷ số 3-1 trong trận chung kết kịch tính.",
                        "status" => "Chờ duyệt",
                        "published_at" => "2026-11-15"
            ]
];

        foreach ($samples as $sample) {
            Post::create($sample);
        }
    }
}
