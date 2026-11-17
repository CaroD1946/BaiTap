@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 29)
                </h4>
                <a href="{{ route('course_sections.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('course_sections.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã lớp học phần <span class="text-danger">*</span></label>
        <input type="text" name="section_code" value="{{ old('section_code', $item->section_code ?? '') }}" class="form-control" placeholder="Nhập mã lớp học phần...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên môn học <span class="text-danger">*</span></label>
        <input type="text" name="course_name" value="{{ old('course_name', $item->course_name ?? '') }}" class="form-control" placeholder="Nhập tên môn học...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Giảng viên phụ trách <span class="text-danger">*</span></label>
        <input type="text" name="lecturer" value="{{ old('lecturer', $item->lecturer ?? '') }}" class="form-control" placeholder="Nhập giảng viên phụ trách...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số tín chỉ <span class="text-danger">*</span></label>
        <input type="number" step="any" name="credits" value="{{ old('credits', $item->credits ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|between:1,5</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số lượng SV tối đa <span class="text-danger">*</span></label>
        <input type="number" step="any" name="max_students" value="{{ old('max_students', $item->max_students ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:10</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tình trạng lớp <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Tình trạng lớp --</option>
                    <option value="Đang mở đăng ký" {{ (old('status', $item->status ?? '') == 'Đang mở đăng ký') ? 'selected' : '' }}>Đang mở đăng ký</option>
                    <option value="Đã đủ sĩ số" {{ (old('status', $item->status ?? '') == 'Đã đủ sĩ số') ? 'selected' : '' }}>Đã đủ sĩ số</option>
                    <option value="Đã đóng lớp" {{ (old('status', $item->status ?? '') == 'Đã đóng lớp') ? 'selected' : '' }}>Đã đóng lớp</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('course_sections.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
