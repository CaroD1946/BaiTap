<?php

namespace App\Http\Controllers\BaiTap;

use App\Http\Controllers\Controller;
use App\Services\BaiTapManager;
use Illuminate\Http\Request;
use Exception;

class DashboardController extends Controller
{
    /**
     * UI Tổng: Hiển thị danh sách và quản lý 50 bài tập
     */
    public function index(Request $request)
    {
        $all = BaiTapManager::getAllExercises();
        $keyword = $request->input('q');

        if (!empty($keyword)) {
            $all = array_filter($all, function ($ex) use ($keyword) {
                return str_contains(mb_strtolower($ex['title']), mb_strtolower($keyword)) ||
                       str_contains(mb_strtolower($ex['desc']), mb_strtolower($keyword)) ||
                       str_contains((string)$ex['num'], $keyword) ||
                       str_contains(mb_strtolower($ex['table']), mb_strtolower($keyword));
            });
        }

        $isAdmin = session('is_admin', true);
        $totalExercises = count(BaiTapManager::getAllExercises());

        return view('baitap.dashboard', compact('all', 'isAdmin', 'keyword', 'totalExercises'));
    }

    /**
     * Khởi tạo toàn bộ 50 cơ sở dữ liệu trên MySQL/phpMyAdmin (1 Click)
     */
    public function initAll(Request $request)
    {
        try {
            $force = $request->has('force');
            $results = BaiTapManager::initAllDatabases($force);
            $successCount = count(array_filter($results, fn($r) => ($r['status'] ?? '') === 'success'));

            return redirect()->route('dashboard')
                ->with('success', "Đã khởi tạo thành công {$successCount}/50 cơ sở dữ liệu riêng biệt trên MySQL và phpMyAdmin!");
        } catch (Exception $e) {
            return redirect()->route('dashboard')
                ->with('error', 'Lỗi khi khởi tạo CSDL: ' . $e->getMessage());
        }
    }

    /**
     * Khởi tạo CSDL riêng cho 1 bài từ UI Tổng
     */
    public function initSingle($id)
    {
        try {
            BaiTapManager::ensureDatabaseAndTable($id, true);
            $meta = BaiTapManager::getExercise($id);
            return redirect()->route('dashboard')
                ->with('success', "Đã tạo cơ sở dữ liệu {$meta['db_name']} và nạp dữ liệu mẫu cho Bài {$id} thành công!");
        } catch (Exception $e) {
            return redirect()->route('dashboard')
                ->with('error', "Lỗi khởi tạo CSDL Bài {$id}: " . $e->getMessage());
        }
    }
}
