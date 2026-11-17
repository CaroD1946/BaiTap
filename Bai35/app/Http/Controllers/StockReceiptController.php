<?php

namespace App\Http\Controllers;

use App\Models\StockReceipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

/**
 * =========================================================================
 * ĐỀ SỐ 35. Hệ thống quản lý phiếu nhập kho
 * =========================================================================
 * Bảng dữ liệu: stock_receipts
 * Cơ sở dữ liệu riêng: db_bai35
 * =========================================================================
 */
class StockReceiptController extends Controller
{
    /**
     * Câu 2 & 3 & 4 & 7: Danh sách dữ liệu, tìm kiếm & lọc bằng Query Builder
     */
    public function index(Request $request)
    {
        // Tự động kiểm tra bảng nếu chưa migrate thì chạy seeder nhanh
        if (!Schema::hasTable('stock_receipts')) {
            return view('stock_receipts.index', [
                'items' => collect(),
                'search' => '',
                'needMigrate' => true,
                'isAdmin' => session('is_admin', true)
            ]);
        }

        $query = StockReceipt::query();

        // Câu 7: Tìm kiếm theo từ khóa
        $search = $request->input('search');
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('receipt_code', 'like', "%{$search}%");
                $q->orWhere('supplier_name', 'like', "%{$search}%");
            });
        }

        // Lọc theo thuộc tính phân loại
        foreach ($request->except(['page', 'search']) as $key => $val) {
            if (!empty($val) && Schema::hasColumn('stock_receipts', $key)) {
                $query->where($key, $val);
            }
        }

        $items = $query->orderBy('id', 'desc')->paginate(10)->withQueryString();
        $isAdmin = session('is_admin', true);

        return view('stock_receipts.index', compact('items', 'search', 'isAdmin'));
    }

    /**
     * Câu 2 & 3: Biểu mẫu thêm mới
     */
    public function create()
    {
        $isAdmin = session('is_admin', true);
        return view('stock_receipts.create', compact('isAdmin'));
    }

    /**
     * Câu 5 & 6: Validation và Lưu dữ liệu bằng Eloquent
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'receipt_code' => 'required|string|max:30',
            'supplier_name' => 'required|string|max:150',
            'receipt_date' => 'required|date',
            'total_quantity' => 'required|integer|min:1',
            'total_cost' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        StockReceipt::create($validated);

        return redirect()->route('stock_receipts.index')
            ->with('success', 'Thêm mới dữ liệu thành công vào bảng stock_receipts (Câu 6)!');
    }

    /**
     * Câu 2 & 3: Xem chi tiết bản ghi
     */
    public function show($id)
    {
        $item = StockReceipt::findOrFail($id);
        $isAdmin = session('is_admin', true);
        return view('stock_receipts.show', compact('item', 'isAdmin'));
    }

    /**
     * Câu 2 & 3: Biểu mẫu chỉnh sửa
     */
    public function edit($id)
    {
        $item = StockReceipt::findOrFail($id);
        $isAdmin = session('is_admin', true);
        return view('stock_receipts.edit', compact('item', 'isAdmin'));
    }

    /**
     * Câu 5 & 6: Validation và Cập nhật bản ghi
     */
    public function update(Request $request, $id)
    {
        $item = StockReceipt::findOrFail($id);
        $validated = $request->validate([
            'receipt_code' => 'required|string|max:30',
            'supplier_name' => 'required|string|max:150',
            'receipt_date' => 'required|date',
            'total_quantity' => 'required|integer|min:1',
            'total_cost' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        $item->update($validated);

        return redirect()->route('stock_receipts.index')
            ->with('success', 'Cập nhật bản ghi #' . $id . ' thành công!');
    }

    /**
     * Câu 8: Middleware bảo vệ quyền quản trị và Xóa bản ghi
     */
    public function destroy($id)
    {
        if (!session('is_admin', true)) {
            return redirect()->route('stock_receipts.index')
                ->with('error', 'Từ chối truy cập (403): Thao tác Xóa bị chặn bởi Middleware Quản trị viên (Câu 8)! Hãy chuyển vai trò sang Admin ở góc phải trên để thử.');
        }

        $item = StockReceipt::findOrFail($id);
        $item->delete();

        return redirect()->route('stock_receipts.index')
            ->with('success', 'Đã xóa bản ghi #' . $id . ' thành công khỏi cơ sở dữ liệu!');
    }

    /**
     * Reseed lại dữ liệu mẫu cho bài này
     */
    public function reseed()
    {
        StockReceipt::truncate();
        $seeder = new \Database\Seeders\DatabaseSeeder();
        $seeder->run();

        return redirect()->route('stock_receipts.index')
            ->with('success', 'Đã nạp lại dữ liệu mẫu ban đầu thành công!');
    }

    /**
     * Chuyển đổi quyền Admin / Khách để test Middleware Câu 8
     */
    public function toggleAdmin()
    {
        $current = session('is_admin', true);
        session(['is_admin' => !$current]);
        $role = !$current ? 'Quản trị viên (Admin)' : 'Khách truy cập (Guest)';
        return redirect()->back()->with('info', "Đã chuyển vai trò sang: {$role} để kiểm thử Middleware Câu 8!");
    }
}
