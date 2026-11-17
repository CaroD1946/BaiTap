@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 11)
                </h4>
                <a href="{{ route('tasks.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('tasks.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tiêu đề công việc <span class="text-danger">*</span></label>
        <input type="text" name="title" value="{{ old('title', $item->title ?? '') }}" class="form-control" placeholder="Nhập tiêu đề công việc...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Người phụ trách <span class="text-danger">*</span></label>
        <input type="text" name="assignee" value="{{ old('assignee', $item->assignee ?? '') }}" class="form-control" placeholder="Nhập người phụ trách...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mức độ ưu tiên <span class="text-danger">*</span></label>
        <select name="priority" class="form-select">
            <option value="">-- Chọn Mức độ ưu tiên --</option>
                    <option value="Thấp" {{ (old('priority', $item->priority ?? '') == 'Thấp') ? 'selected' : '' }}>Thấp</option>
                    <option value="Trung bình" {{ (old('priority', $item->priority ?? '') == 'Trung bình') ? 'selected' : '' }}>Trung bình</option>
                    <option value="Cao" {{ (old('priority', $item->priority ?? '') == 'Cao') ? 'selected' : '' }}>Cao</option>
                    <option value="Khẩn cấp" {{ (old('priority', $item->priority ?? '') == 'Khẩn cấp') ? 'selected' : '' }}>Khẩn cấp</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Hạn hoàn thành <span class="text-danger">*</span></label>
        <input type="date" name="due_date" value="{{ old('due_date', $item->due_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái --</option>
                    <option value="Chưa bắt đầu" {{ (old('status', $item->status ?? '') == 'Chưa bắt đầu') ? 'selected' : '' }}>Chưa bắt đầu</option>
                    <option value="Đang thực hiện" {{ (old('status', $item->status ?? '') == 'Đang thực hiện') ? 'selected' : '' }}>Đang thực hiện</option>
                    <option value="Hoàn thành" {{ (old('status', $item->status ?? '') == 'Hoàn thành') ? 'selected' : '' }}>Hoàn thành</option>
                    <option value="Tạm hoãn" {{ (old('status', $item->status ?? '') == 'Tạm hoãn') ? 'selected' : '' }}>Tạm hoãn</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Mô tả chi tiết </label>
        <textarea name="description" rows="3" class="form-control" placeholder="Nhập mô tả chi tiết...">{{ old('description', $item->description ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('tasks.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
