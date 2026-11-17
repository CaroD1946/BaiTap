@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 23)
                </h4>
                <a href="{{ route('work_schedules.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('work_schedules.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên nhân viên <span class="text-danger">*</span></label>
        <input type="text" name="employee_name" value="{{ old('employee_name', $item->employee_name ?? '') }}" class="form-control" placeholder="Nhập tên nhân viên...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ca làm việc <span class="text-danger">*</span></label>
        <select name="shift" class="form-select">
            <option value="">-- Chọn Ca làm việc --</option>
                    <option value="Ca sáng (06:00 - 14:00)" {{ (old('shift', $item->shift ?? '') == 'Ca sáng (06:00 - 14:00)') ? 'selected' : '' }}>Ca sáng (06:00 - 14:00)</option>
                    <option value="Ca chiều (14:00 - 22:00)" {{ (old('shift', $item->shift ?? '') == 'Ca chiều (14:00 - 22:00)') ? 'selected' : '' }}>Ca chiều (14:00 - 22:00)</option>
                    <option value="Ca đêm (22:00 - 06:00)" {{ (old('shift', $item->shift ?? '') == 'Ca đêm (22:00 - 06:00)') ? 'selected' : '' }}>Ca đêm (22:00 - 06:00)</option>
                    <option value="Ca hành chính" {{ (old('shift', $item->shift ?? '') == 'Ca hành chính') ? 'selected' : '' }}>Ca hành chính</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày làm việc <span class="text-danger">*</span></label>
        <input type="date" name="work_date" value="{{ old('work_date', $item->work_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Khu vực / Bàn làm việc <span class="text-danger">*</span></label>
        <input type="text" name="workstation" value="{{ old('workstation', $item->workstation ?? '') }}" class="form-control" placeholder="Nhập khu vực / bàn làm việc...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái điểm danh <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái điểm danh --</option>
                    <option value="Đã lên lịch" {{ (old('status', $item->status ?? '') == 'Đã lên lịch') ? 'selected' : '' }}>Đã lên lịch</option>
                    <option value="Có mặt" {{ (old('status', $item->status ?? '') == 'Có mặt') ? 'selected' : '' }}>Có mặt</option>
                    <option value="Đi muộn" {{ (old('status', $item->status ?? '') == 'Đi muộn') ? 'selected' : '' }}>Đi muộn</option>
                    <option value="Vắng mặt" {{ (old('status', $item->status ?? '') == 'Vắng mặt') ? 'selected' : '' }}>Vắng mặt</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Ghi chú bàn giao </label>
        <textarea name="notes" rows="3" class="form-control" placeholder="Nhập ghi chú bàn giao...">{{ old('notes', $item->notes ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('work_schedules.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
