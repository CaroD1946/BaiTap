@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 33)
                </h4>
                <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên dự án phần mềm <span class="text-danger">*</span></label>
        <input type="text" name="project_name" value="{{ old('project_name', $item->project_name ?? '') }}" class="form-control" placeholder="Nhập tên dự án phần mềm...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trưởng dự án (PM) <span class="text-danger">*</span></label>
        <input type="text" name="leader_name" value="{{ old('leader_name', $item->leader_name ?? '') }}" class="form-control" placeholder="Nhập trưởng dự án (pm)...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày bắt đầu <span class="text-danger">*</span></label>
        <input type="date" name="start_date" value="{{ old('start_date', $item->start_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Hạn bàn giao <span class="text-danger">*</span></label>
        <input type="date" name="deadline" value="{{ old('deadline', $item->deadline ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngân sách dự án (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="budget" value="{{ old('budget', $item->budget ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tiến độ dự án <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Tiến độ dự án --</option>
                    <option value="Khởi tạo" {{ (old('status', $item->status ?? '') == 'Khởi tạo') ? 'selected' : '' }}>Khởi tạo</option>
                    <option value="Đang phát triển" {{ (old('status', $item->status ?? '') == 'Đang phát triển') ? 'selected' : '' }}>Đang phát triển</option>
                    <option value="Đang kiểm thử (QA)" {{ (old('status', $item->status ?? '') == 'Đang kiểm thử (QA)') ? 'selected' : '' }}>Đang kiểm thử (QA)</option>
                    <option value="Nghiệm thu" {{ (old('status', $item->status ?? '') == 'Nghiệm thu') ? 'selected' : '' }}>Nghiệm thu</option>
                    <option value="Bảo trì" {{ (old('status', $item->status ?? '') == 'Bảo trì') ? 'selected' : '' }}>Bảo trì</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('projects.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
