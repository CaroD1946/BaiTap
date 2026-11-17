<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\BaiTapManager;

class InitAllBaiTapDatabases extends Command
{
    protected $signature = 'baitap:init-all {--force : Xóa và nạp lại CSDL}';
    protected $description = 'Tự động khởi tạo 50 cơ sở dữ liệu riêng biệt và nạp dữ liệu mẫu cho 50 bài tập';

    public function handle()
    {
        $this->info("Bắt đầu khởi tạo 50 cơ sở dữ liệu trên MySQL/phpMyAdmin...");
        $force = $this->option('force');

        $exercises = BaiTapManager::getAllExercises();
        $bar = $this->output->createProgressBar(count($exercises));
        $bar->start();

        $success = 0;
        $failed = 0;

        foreach ($exercises as $ex) {
            $num = $ex['num'];
            try {
                BaiTapManager::ensureDatabaseAndTable($num, $force);
                $success++;
            } catch (\Exception $e) {
                $failed++;
                $this->error("\nLỗi Bài {$num}: " . $e->getMessage());
            }
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info("Hoàn tất! Đã khởi tạo thành công: {$success}/50 CSDL.");
        if ($failed > 0) {
            $this->warn("Thất bại: {$failed}/50 CSDL.");
        }

        return 0;
    }
}
