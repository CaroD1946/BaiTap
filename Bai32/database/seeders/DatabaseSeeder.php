<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "topic" => "Lập trình Web",
                        "question_text" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 32 - mục #1.",
                        "difficulty" => "Dễ",
                        "correct_answer" => "Đáp án A",
                        "points" => 15,
                        "explanation" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 32 - mục #1."
            ],
            [
                        "topic" => "Cơ sở dữ liệu",
                        "question_text" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 32 - mục #2.",
                        "difficulty" => "Trung bình",
                        "correct_answer" => "Đáp án B",
                        "points" => 20,
                        "explanation" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 32 - mục #2."
            ],
            [
                        "topic" => "Giải thuật",
                        "question_text" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 32 - mục #3.",
                        "difficulty" => "Khó",
                        "correct_answer" => "Đáp án C",
                        "points" => 25,
                        "explanation" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 32 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Question::create($sample);
        }
    }
}
