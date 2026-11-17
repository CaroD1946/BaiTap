@extends('layouts.app')

@section('content')
<div class="card bg-white border-0 shadow-sm p-4 mb-4 rounded-3">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="badge bg-primary fs-6">ĐỀ SỐ 43</span>
                <span class="badge-db"><i class="bi bi-database me-1"></i> db_bai43</span>
                <span class="badge bg-secondary"><i class="bi bi-table me-1"></i> real_estates</span>
            </div>
            <h3 class="fw-bold mb-0 text-dark">Hệ thống quản lý tin bất động sản</h3>
        </div>

        <div class="d-flex gap-2">
            <a href="{{ route('real_estates.create') }}" class="btn btn-primary fw-bold shadow-sm">
                <i class="bi bi-plus-circle-fill me-1"></i> Thêm mới
            </a>
            <form action="{{ route('reseed') }}" method="POST" onsubmit="return confirm('Đặt lại dữ liệu mẫu ban đầu?');">
                @csrf
                <button type="submit" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i> Reset mẫu
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Toolbar Tìm kiếm & Lọc (Câu 7 Query Builder) -->
<div class="card bg-white border-0 shadow-sm p-3 mb-4 rounded-3">
    <form action="{{ route('real_estates.index') }}" method="GET" class="row g-2 align-items-center">
        <div class="col-md-9 col-lg-10">
            <div class="input-group">
                <span class="input-group-text bg-light border-end-0"><i class="bi bi-search text-muted"></i></span>
                <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control border-start-0" 
                       placeholder="Tìm kiếm dữ liệu (Câu 7: Query Builder)...">
            </div>
        </div>
        <div class="col-md-3 col-lg-2 d-flex gap-2">
            <button type="submit" class="btn btn-dark w-100 fw-semibold">
                <i class="bi bi-funnel me-1"></i> Lọc
            </button>
            @if(!empty($search))
                <a href="{{ route('real_estates.index') }}" class="btn btn-outline-secondary" title="Hủy tìm kiếm">
                    <i class="bi bi-x-lg"></i>
                </a>
            @endif
        </div>
    </form>
</div>

<!-- Table hiển thị danh sách -->
<div class="card bg-white border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light text-secondary">
                <tr>
                    <th style="width: 50px;" class="text-center">#ID</th>
                    <th>Tiêu đề tin bất động sản</th>
<th>Loại hình BĐS</th>
<th>Vị trí / Địa chỉ</th>
<th>Diện tích (m²)</th>
<th>Giá bán (Tỷ VNĐ)</th>
<th>Tình trạng giao dịch</th>
                    <th style="width: 160px;" class="text-center">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $row)
                    <tr>
                        <td class="text-center fw-bold text-muted">{{ $row->id }}</td>
                        <td>{{ $row->title }}</td>
<td><span class="badge bg-secondary-subtle text-secondary border">{{ $row->property_type }}</span></td>
<td>{{ $row->address }}</td>
<td>{{ $row->area_m2 }}</td>
<td><span class="fw-bold text-primary">{{ number_format($row->price_billion, 0, ',', '.') }} đ</span></td>
<td><span class="badge bg-secondary-subtle text-secondary border">{{ $row->status }}</span></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('real_estates.show', $row->id) }}" class="btn btn-outline-info" title="Xem chi tiết">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('real_estates.edit', $row->id) }}" class="btn btn-outline-primary" title="Sửa">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('real_estates.destroy', $row->id) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Bạn có chắc chắn muốn xóa bản ghi #{{ $row->id }} không?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" title="Xóa (Câu 8 Middleware)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                            Chưa có dữ liệu nào trong bảng <code>real_estates</code> của CSDL <code>db_bai43</code>.<br>
                            Bấm nút <strong>"Thêm mới"</strong> hoặc <strong>"Reset mẫu"</strong> để bắt đầu!
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if(method_exists($items, 'hasPages') && $items->hasPages())
        <div class="card-footer bg-white border-top py-3 d-flex justify-content-between align-items-center">
            <span class="small text-muted">
                Hiển thị {{ $items->firstItem() }} - {{ $items->lastItem() }} trong tổng số {{ $items->total() }} bản ghi
            </span>
            <div>
                {{ $items->links('pagination::bootstrap-5') }}
            </div>
        </div>
    @endif
</div>
@endsection
