<?php

namespace App\Http\Controllers\BaiTap;

use App\Http\Controllers\Controller;
use App\Services\BaiTapManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Exception;

class BaseBaiTapController extends Controller
{
    protected $baiNum = 1;

    public function __construct()
    {
        // Default middleware or hooks if needed
    }

    /**
     * Get exercise metadata
     */
    protected function getMeta()
    {
        return BaiTapManager::getExercise($this->baiNum);
    }

    /**
     * Check if current session has admin privileges
     */
    protected function isAdmin()
    {
        return session('is_admin', true); // Default to admin for convenient testing
    }

    /**
     * Câu 2 & Câu 3 & Câu 4 & Câu 7: Hiển thị danh sách, tìm kiếm và lọc
     */
    public function index(Request $request)
    {
        $meta = $this->getMeta();
        if (!$meta) {
            abort(404, "Không tìm thấy bài tập số {$this->baiNum}");
        }

        // Đảm bảo Database và Bảng tồn tại trong MySQL / phpMyAdmin
        BaiTapManager::ensureDatabaseAndTable($this->baiNum);

        $query = DB::connection('dynamic_bai')->table($meta['table']);

        // Câu 7: Query Builder tìm kiếm & lọc dữ liệu
        $search = $request->input('search');
        if (!empty($search)) {
            $query->where(function ($q) use ($meta, $search) {
                $first = true;
                foreach ($meta['fields'] as $f) {
                    if (!empty($f['searchable'])) {
                        if ($first) {
                            $q->where($f['name'], 'like', "%{$search}%");
                            $first = false;
                        } else {
                            $q->orWhere($f['name'], 'like', "%{$search}%");
                        }
                    }
                }
            });
        }

        // Lọc theo trường filterable (ví dụ trạng thái, danh mục, phân loại)
        $filterField = null;
        $filterValue = null;
        foreach ($meta['fields'] as $f) {
            if (!empty($f['filterable']) && $request->filled($f['name'])) {
                $query->where($f['name'], $request->input($f['name']));
                $filterField = $f['name'];
                $filterValue = $request->input($f['name']);
            }
        }

        $items = $query->orderBy('id', 'desc')->paginate(10)->withQueryString();
        $dbInfo = BaiTapManager::getDbInfo($this->baiNum);
        $allExercises = BaiTapManager::getAllExercises();
        $isAdmin = $this->isAdmin();

        // Kiểm tra xem có view riêng của bài không (ví dụ resources/views/baitap/bai01.blade.php)
        $customView = sprintf('baitap.bai%02d', $this->baiNum);
        $viewName = view()->exists($customView) ? $customView : 'baitap.detail';

        return view($viewName, compact('meta', 'items', 'dbInfo', 'allExercises', 'isAdmin', 'search', 'filterField', 'filterValue'));
    }

    /**
     * Câu 2 & Câu 3: Biểu mẫu tạo mới
     */
    public function create()
    {
        $meta = $this->getMeta();
        $allExercises = BaiTapManager::getAllExercises();
        $isAdmin = $this->isAdmin();
        return view('baitap.form', compact('meta', 'allExercises', 'isAdmin'));
    }

    /**
     * Câu 5 & Câu 6: Xử lý Request, Validation và Lưu vào CSDL Eloquent/QueryBuilder
     */
    public function store(Request $request)
    {
        $meta = $this->getMeta();
        BaiTapManager::ensureDatabaseAndTable($this->baiNum);

        // Xây dựng validation rules từ metadata
        $rules = [];
        $messages = [];
        foreach ($meta['fields'] as $f) {
            if (!empty($f['rules'])) {
                $rules[$f['name']] = $f['rules'];
            }
        }

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Dữ liệu không hợp lệ! Vui lòng kiểm tra lại theo yêu cầu Đề bài (Câu 5).');
        }

        $data = [];
        foreach ($meta['fields'] as $f) {
            $fname = $f['name'];
            if ($request->has($fname)) {
                $data[$fname] = $request->input($fname);
            }
        }

        // Xử lý upload file nếu có (Câu 7 của đề 1, 2...)
        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/bai' . sprintf('%02d', $this->baiNum)), $filename);
            $data['image'] = 'uploads/bai' . sprintf('%02d', $this->baiNum) . '/' . $filename;
        }

        $data['created_at'] = now();
        $data['updated_at'] = now();

        DB::connection('dynamic_bai')->table($meta['table'])->insert($data);

        return redirect()->route('baitap.show_bai', ['id' => $this->baiNum])
            ->with('success', 'Thêm mới thành công vào cơ sở dữ liệu ' . $meta['db_name'] . ' (Câu 6)!');
    }

    /**
     * Câu 2 & Câu 3: Xem chi tiết
     */
    public function show($id)
    {
        $meta = $this->getMeta();
        BaiTapManager::ensureDatabaseAndTable($this->baiNum);

        $item = DB::connection('dynamic_bai')->table($meta['table'])->where('id', $id)->first();
        if (!$item) {
            return redirect()->route('baitap.show_bai', ['id' => $this->baiNum])
                ->with('error', 'Không tìm thấy bản ghi có ID #' . $id);
        }

        if (request()->wantsJson()) {
            return response()->json($item);
        }

        $allExercises = BaiTapManager::getAllExercises();
        $isAdmin = $this->isAdmin();
        return view('baitap.show_item', compact('meta', 'item', 'allExercises', 'isAdmin'));
    }

    /**
     * Câu 2 & Câu 3: Biểu mẫu chỉnh sửa
     */
    public function edit($id)
    {
        $meta = $this->getMeta();
        BaiTapManager::ensureDatabaseAndTable($this->baiNum);

        $item = DB::connection('dynamic_bai')->table($meta['table'])->where('id', $id)->first();
        if (!$item) {
            return redirect()->route('baitap.show_bai', ['id' => $this->baiNum])
                ->with('error', 'Không tìm thấy bản ghi cần sửa!');
        }

        $allExercises = BaiTapManager::getAllExercises();
        $isAdmin = $this->isAdmin();
        return view('baitap.form', compact('meta', 'item', 'allExercises', 'isAdmin'));
    }

    /**
     * Câu 5 & Câu 6: Cập nhật bản ghi
     */
    public function update(Request $request, $id)
    {
        $meta = $this->getMeta();
        BaiTapManager::ensureDatabaseAndTable($this->baiNum);

        $rules = [];
        foreach ($meta['fields'] as $f) {
            if (!empty($f['rules'])) {
                $rules[$f['name']] = $f['rules'];
            }
        }

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Cập nhật thất bại: Dữ liệu không hợp lệ!');
        }

        $data = [];
        foreach ($meta['fields'] as $f) {
            $fname = $f['name'];
            if ($request->has($fname)) {
                $data[$fname] = $request->input($fname);
            }
        }
        $data['updated_at'] = now();

        DB::connection('dynamic_bai')->table($meta['table'])->where('id', $id)->update($data);

        return redirect()->route('baitap.show_bai', ['id' => $this->baiNum])
            ->with('success', 'Cập nhật bản ghi #' . $id . ' thành công trong CSDL ' . $meta['db_name'] . '!');
    }

    /**
     * Câu 8: Middleware bảo vệ quyền quản trị và Xóa bản ghi
     */
    public function destroy($id)
    {
        $meta = $this->getMeta();

        // Middleware simulation (Câu 8: Áp dụng Middleware yêu cầu đăng nhập/quyền quản trị)
        if (!$this->isAdmin()) {
            return redirect()->route('baitap.show_bai', ['id' => $this->baiNum])
                ->with('error', 'Từ chối truy cập (403 Forbidden): Chức năng xóa bị chặn bởi Middleware quản trị (Câu 8)! Vui lòng bật quyền Admin ở thanh trên cùng để thực hiện.');
        }

        BaiTapManager::ensureDatabaseAndTable($this->baiNum);
        DB::connection('dynamic_bai')->table($meta['table'])->where('id', $id)->delete();

        return redirect()->route('baitap.show_bai', ['id' => $this->baiNum])
            ->with('success', 'Đã xóa bản ghi #' . $id . ' thành công khỏi ' . $meta['db_name'] . '!');
    }

    /**
     * Khởi tạo lại dữ liệu mẫu cho bài này
     */
    public function reseed()
    {
        $meta = $this->getMeta();
        BaiTapManager::ensureDatabaseAndTable($this->baiNum, true);

        return redirect()->route('baitap.show_bai', ['id' => $this->baiNum])
            ->with('success', 'Đã khởi tạo lại CSDL ' . $meta['db_name'] . ' và nạp dữ liệu mẫu thành công!');
    }

    /**
     * Chuyển đổi vai trò Admin / Khách để kiểm thử Middleware (Câu 8)
     */
    public function toggleAdmin()
    {
        $current = session('is_admin', true);
        session(['is_admin' => !$current]);

        $roleName = !$current ? 'Quản trị viên (Admin)' : 'Khách truy cập (Guest)';
        return redirect()->back()->with('info', "Đã chuyển sang vai trò: {$roleName} để kiểm thử Middleware Câu 8!");
    }
}
