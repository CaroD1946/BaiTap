<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

/**
 * =========================================================================
 * ĐỀ SỐ 40. Hệ thống quản lý lịch hẹn
 * =========================================================================
 * Bảng dữ liệu: appointments
 * Cơ sở dữ liệu riêng: db_bai40
 * =========================================================================
 */
class AppointmentController extends Controller
{
    /**
     * Câu 2 & 3 & 4 & 7: Danh sách dữ liệu, tìm kiếm & lọc bằng Query Builder
     */
    public function index(Request $request)
    {
        // Tự động kiểm tra bảng nếu chưa migrate thì chạy seeder nhanh
        if (!Schema::hasTable('appointments')) {
            return view('appointments.index', [
                'items' => collect(),
                'search' => '',
                'needMigrate' => true,
                'isAdmin' => session('is_admin', true)
            ]);
        }

        $query = Appointment::query();

        // Câu 7: Tìm kiếm theo từ khóa
        $search = $request->input('search');
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('customer_name', 'like', "%{$search}%");
                $q->orWhere('phone', 'like', "%{$search}%");
            });
        }

        // Lọc theo thuộc tính phân loại
        foreach ($request->except(['page', 'search']) as $key => $val) {
            if (!empty($val) && Schema::hasColumn('appointments', $key)) {
                $query->where($key, $val);
            }
        }

        $items = $query->orderBy('id', 'desc')->paginate(10)->withQueryString();
        $isAdmin = session('is_admin', true);

        return view('appointments.index', compact('items', 'search', 'isAdmin'));
    }

    /**
     * Câu 2 & 3: Biểu mẫu thêm mới
     */
    public function create()
    {
        $isAdmin = session('is_admin', true);
        return view('appointments.create', compact('isAdmin'));
    }

    /**
     * Câu 5 & 6: Validation và Lưu dữ liệu bằng Eloquent
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'service_name' => 'required|string',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|string',
            'status' => 'required|string',
        ]);

        Appointment::create($validated);

        return redirect()->route('appointments.index')
            ->with('success', 'Thêm mới dữ liệu thành công vào bảng appointments (Câu 6)!');
    }

    /**
     * Câu 2 & 3: Xem chi tiết bản ghi
     */
    public function show($id)
    {
        $item = Appointment::findOrFail($id);
        $isAdmin = session('is_admin', true);
        return view('appointments.show', compact('item', 'isAdmin'));
    }

    /**
     * Câu 2 & 3: Biểu mẫu chỉnh sửa
     */
    public function edit($id)
    {
        $item = Appointment::findOrFail($id);
        $isAdmin = session('is_admin', true);
        return view('appointments.edit', compact('item', 'isAdmin'));
    }

    /**
     * Câu 5 & 6: Validation và Cập nhật bản ghi
     */
    public function update(Request $request, $id)
    {
        $item = Appointment::findOrFail($id);
        $validated = $request->validate([
            'customer_name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'service_name' => 'required|string',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|string',
            'status' => 'required|string',
        ]);

        $item->update($validated);

        return redirect()->route('appointments.index')
            ->with('success', 'Cập nhật bản ghi #' . $id . ' thành công!');
    }

    /**
     * Câu 8: Middleware bảo vệ quyền quản trị và Xóa bản ghi
     */
    public function destroy($id)
    {
        if (!session('is_admin', true)) {
            return redirect()->route('appointments.index')
                ->with('error', 'Từ chối truy cập (403): Thao tác Xóa bị chặn bởi Middleware Quản trị viên (Câu 8)! Hãy chuyển vai trò sang Admin ở góc phải trên để thử.');
        }

        $item = Appointment::findOrFail($id);
        $item->delete();

        return redirect()->route('appointments.index')
            ->with('success', 'Đã xóa bản ghi #' . $id . ' thành công khỏi cơ sở dữ liệu!');
    }

    /**
     * Reseed lại dữ liệu mẫu cho bài này
     */
    public function reseed()
    {
        Appointment::truncate();
        $seeder = new \Database\Seeders\DatabaseSeeder();
        $seeder->run();

        return redirect()->route('appointments.index')
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
