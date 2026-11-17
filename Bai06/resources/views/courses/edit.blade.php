@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 06)
                </h4>
                <a href="{{ route('courses.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('courses.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã khóa học <span class="text-danger">*</span></label>
        <input type="text" name="course_code" value="{{ old('course_code', $item->course_code ?? '') }}" class="form-control" placeholder="Nhập mã khóa học...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên khóa học <span class="text-danger">*</span></label>
        <input type="text" name="name" value="{{ old('name', $item->name ?? '') }}" class="form-control" placeholder="Nhập tên khóa học...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Thời lượng (tuần) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="duration_weeks" value="{{ old('duration_weeks', $item->duration_weeks ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:1</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Học phí (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="tuition_fee" value="{{ old('tuition_fee', $item->tuition_fee ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái --</option>
                    <option value="Đang tuyển sinh" {{ (old('status', $item->status ?? '') == 'Đang tuyển sinh') ? 'selected' : '' }}>Đang tuyển sinh</option>
                    <option value="Đang học" {{ (old('status', $item->status ?? '') == 'Đang học') ? 'selected' : '' }}>Đang học</option>
                    <option value="Đã kết thúc" {{ (old('status', $item->status ?? '') == 'Đã kết thúc') ? 'selected' : '' }}>Đã kết thúc</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Mô tả khóa học </label>
        <textarea name="description" rows="3" class="form-control" placeholder="Nhập mô tả khóa học...">{{ old('description', $item->description ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('courses.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
