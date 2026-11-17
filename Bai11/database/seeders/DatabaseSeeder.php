<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "title" => "Dữ liệu Tiêu đề công việc số 1",
                        "assignee" => "Dữ liệu Người phụ trách số 1",
                        "priority" => "Thấp",
                        "due_date" => "2026-11-11",
                        "status" => "Chưa bắt đầu",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 11 - mục #1."
            ],
            [
                        "title" => "Dữ liệu Tiêu đề công việc số 2",
                        "assignee" => "Dữ liệu Người phụ trách số 2",
                        "priority" => "Trung bình",
                        "due_date" => "2026-11-12",
                        "status" => "Đang thực hiện",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 11 - mục #2."
            ],
            [
                        "title" => "Dữ liệu Tiêu đề công việc số 3",
                        "assignee" => "Dữ liệu Người phụ trách số 3",
                        "priority" => "Cao",
                        "due_date" => "2026-11-13",
                        "status" => "Hoàn thành",
                        "description" => "Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập 11 - mục #3."
            ]
];

        foreach ($samples as $sample) {
            Task::create($sample);
        }
    }
}
