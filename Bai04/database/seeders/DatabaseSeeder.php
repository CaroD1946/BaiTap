<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "book_code" => "BK-001",
                        "title" => "Lập trình Web với Laravel chuyên sâu",
                        "author" => "Taylor Otwell",
                        "publisher" => "NXB Thông Tin",
                        "publish_year" => 2024,
                        "quantity" => 12
            ],
            [
                        "book_code" => "BK-002",
                        "title" => "Clean Code - Nghệ thuật viết code sạch",
                        "author" => "Robert C. Martin",
                        "publisher" => "NXB Khoa Học",
                        "publish_year" => 2023,
                        "quantity" => 8
            ],
            [
                        "book_code" => "BK-003",
                        "title" => "Thiết kế kiến trúc hệ thống phân tán",
                        "author" => "Martin Fowler",
                        "publisher" => "NXB Trẻ",
                        "publish_year" => 2025,
                        "quantity" => 15
            ]
];

        foreach ($samples as $sample) {
            Book::create($sample);
        }
    }
}
