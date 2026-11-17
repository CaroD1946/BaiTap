<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

/**
 * =========================================================================
 * ĐỀ SỐ 22. Hệ thống quản lý tài liệu nội bộ
 * =========================================================================
 * Bảng dữ liệu: documents
 * Cơ sở dữ liệu riêng: db_bai22
 * =========================================================================
 */
class DocumentController extends Controller
{
    /**
     * Câu 2 & 3 & 4 & 7: Danh sách dữ liệu, tìm kiếm & lọc bằng Query Builder
     */
    public function index(Request $request)
    {
        // Tự động kiểm tra bảng nếu chưa migrate thì chạy seeder nhanh
        if (!Schema::hasTable('documents')) {
            return view('documents.index', [
                'items' => collect(),
                'search' => '',
                'needMigrate' => true,
                'isAdmin' => session('is_admin', true)
            ]);
        }

        $query = Document::query();

        // Câu 7: Tìm kiếm theo từ khóa
        $search = $request->input('search');
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('doc_code', 'like', "%{$search}%");
                $q->orWhere('title', 'like', "%{$search}%");
                $q->orWhere('author', 'like', "%{$search}%");
            });
        }

        // Lọc theo thuộc tính phân loại
        foreach ($request->except(['page', 'search']) as $key => $val) {
            if (!empty($val) && Schema::hasColumn('documents', $key)) {
                $query->where($key, $val);
            }
        }

        $items = $query->orderBy('id', 'desc')->paginate(10)->withQueryString();
        $isAdmin = session('is_admin', true);

        return view('documents.index', compact('items', 'search', 'isAdmin'));
    }

    /**
     * Câu 2 & 3: Biểu mẫu thêm mới
     */
    public function create()
    {
        $isAdmin = session('is_admin', true);
        return view('documents.create', compact('isAdmin'));
    }

    /**
     * Câu 5 & 6: Validation và Lưu dữ liệu bằng Eloquent
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'doc_code' => 'required|string|max:30',
            'title' => 'required|string|max:200',
            'category' => 'required|string',
            'author' => 'required|string|max:100',
            'security_level' => 'required|string',
            'summary' => 'nullable|string',
        ]);

        Document::create($validated);

        return redirect()->route('documents.index')
            ->with('success', 'Thêm mới dữ liệu thành công vào bảng documents (Câu 6)!');
    }

    /**
     * Câu 2 & 3: Xem chi tiết bản ghi
     */
    public function show($id)
    {
        $item = Document::findOrFail($id);
        $isAdmin = session('is_admin', true);
        return view('documents.show', compact('item', 'isAdmin'));
    }

    /**
     * Câu 2 & 3: Biểu mẫu chỉnh sửa
     */
    public function edit($id)
    {
        $item = Document::findOrFail($id);
        $isAdmin = session('is_admin', true);
        return view('documents.edit', compact('item', 'isAdmin'));
    }

    /**
     * Câu 5 & 6: Validation và Cập nhật bản ghi
     */
    public function update(Request $request, $id)
    {
        $item = Document::findOrFail($id);
        $validated = $request->validate([
            'doc_code' => 'required|string|max:30',
            'title' => 'required|string|max:200',
            'category' => 'required|string',
            'author' => 'required|string|max:100',
            'security_level' => 'required|string',
            'summary' => 'nullable|string',
        ]);

        $item->update($validated);

        return redirect()->route('documents.index')
            ->with('success', 'Cập nhật bản ghi #' . $id . ' thành công!');
    }

    /**
     * Câu 8: Middleware bảo vệ quyền quản trị và Xóa bản ghi
     */
    public function destroy($id)
    {
        if (!session('is_admin', true)) {
            return redirect()->route('documents.index')
                ->with('error', 'Từ chối truy cập (403): Thao tác Xóa bị chặn bởi Middleware Quản trị viên (Câu 8)! Hãy chuyển vai trò sang Admin ở góc phải trên để thử.');
        }

        $item = Document::findOrFail($id);
        $item->delete();

        return redirect()->route('documents.index')
            ->with('success', 'Đã xóa bản ghi #' . $id . ' thành công khỏi cơ sở dữ liệu!');
    }

    /**
     * Reseed lại dữ liệu mẫu cho bài này
     */
    public function reseed()
    {
        Document::truncate();
        $seeder = new \Database\Seeders\DatabaseSeeder();
        $seeder->run();

        return redirect()->route('documents.index')
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
