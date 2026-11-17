<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expense;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                        "expense_title" => "Dữ liệu Tên khoản chi phí số 1",
                        "category" => "Thiết bị văn phòng",
                        "amount" => 150000,
                        "expense_date" => "2026-11-11",
                        "proposer" => "Dữ liệu Người đề xuất chi số 1",
                        "status" => "Chờ quản lý duyệt"
            ],
            [
                        "expense_title" => "Dữ liệu Tên khoản chi phí số 2",
                        "category" => "Chi phí tiếp khách",
                        "amount" => 300000,
                        "expense_date" => "2026-11-12",
                        "proposer" => "Dữ liệu Người đề xuất chi số 2",
                        "status" => "Đã phê duyệt"
            ],
            [
                        "expense_title" => "Dữ liệu Tên khoản chi phí số 3",
                        "category" => "Đi lại công tác",
                        "amount" => 450000,
                        "expense_date" => "2026-11-13",
                        "proposer" => "Dữ liệu Người đề xuất chi số 3",
                        "status" => "Đã chi tiền"
            ]
];

        foreach ($samples as $sample) {
            Expense::create($sample);
        }
    }
}
