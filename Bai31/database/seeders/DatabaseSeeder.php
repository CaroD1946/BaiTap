<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "recipe_name" => "Tên món ăn / Công thức mẫu #1",
                        "cuisine_type" => "Món Việt",
                        "cooking_time_minutes" => 15,
                        "difficulty" => "Dễ làm",
                        "ingredients" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 31 - mục #1.",
                        "instructions" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 31 - mục #1."
            ],
            [
                        "recipe_name" => "Tên món ăn / Công thức mẫu #2",
                        "cuisine_type" => "Món Á",
                        "cooking_time_minutes" => 20,
                        "difficulty" => "Trung bình",
                        "ingredients" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 31 - mục #2.",
                        "instructions" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 31 - mục #2."
            ],
            [
                        "recipe_name" => "Tên món ăn / Công thức mẫu #3",
                        "cuisine_type" => "Món Âu",
                        "cooking_time_minutes" => 25,
                        "difficulty" => "Khó",
                        "ingredients" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 31 - mục #3.",
                        "instructions" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 31 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Recipe::create($sample);
        }
    }
}
