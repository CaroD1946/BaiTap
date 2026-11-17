<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "category_code" => "CAT-1601",
                        "name" => "Tên danh mục mẫu #1",
                        "display_order" => 15,
                        "status" => "Hoạt động",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 16 - mục #1."
            ],
            [
                        "category_code" => "CAT-1602",
                        "name" => "Tên danh mục mẫu #2",
                        "display_order" => 20,
                        "status" => "Tạm dừng",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 16 - mục #2."
            ],
            [
                        "category_code" => "CAT-1603",
                        "name" => "Tên danh mục mẫu #3",
                        "display_order" => 25,
                        "status" => "Hoạt động",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 16 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Category::create($sample);
        }
    }
}
