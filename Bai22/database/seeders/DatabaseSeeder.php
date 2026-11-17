<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Document;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "doc_code" => "DOC-2201",
                        "title" => "Dữ liệu Tên tài liệu số 1",
                        "category" => "Quy chế nội bộ",
                        "author" => "Dữ liệu Người biên soạn số 1",
                        "security_level" => "Công khai",
                        "summary" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 22 - mục #1."
            ],
            [
                        "doc_code" => "DOC-2202",
                        "title" => "Dữ liệu Tên tài liệu số 2",
                        "category" => "Tài liệu kỹ thuật",
                        "author" => "Dữ liệu Người biên soạn số 2",
                        "security_level" => "Nội bộ công ty",
                        "summary" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 22 - mục #2."
            ],
            [
                        "doc_code" => "DOC-2203",
                        "title" => "Dữ liệu Tên tài liệu số 3",
                        "category" => "Báo cáo tài chính",
                        "author" => "Dữ liệu Người biên soạn số 3",
                        "security_level" => "Bảo mật cao",
                        "summary" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 22 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Document::create($sample);
        }
    }
}
