@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 03)
                </h4>
                <a href="{{ route('students.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('students.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã sinh viên <span class="text-danger">*</span></label>
        <input type="text" name="student_code" value="{{ old('student_code', $item->student_code ?? '') }}" class="form-control" placeholder="Nhập mã sinh viên...">
        <div class="form-text small">Quy tắc: <code>required|string|max:20</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Họ và tên <span class="text-danger">*</span></label>
        <input type="text" name="fullname" value="{{ old('fullname', $item->fullname ?? '') }}" class="form-control" placeholder="Nhập họ và tên...">
        <div class="form-text small">Quy tắc: <code>required|string|min:3|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Địa chỉ Email <span class="text-danger">*</span></label>
        <input type="email" name="email" value="{{ old('email', $item->email ?? '') }}" class="form-control" placeholder="user@example.com">
        <div class="form-text small">Quy tắc: <code>required|email|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày sinh <span class="text-danger">*</span></label>
        <input type="date" name="birthdate" value="{{ old('birthdate', $item->birthdate ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Lớp học <span class="text-danger">*</span></label>
        <select name="class_name" class="form-select">
            <option value="">-- Chọn Lớp học --</option>
                    <option value="CNTT K15A" {{ (old('class_name', $item->class_name ?? '') == 'CNTT K15A') ? 'selected' : '' }}>CNTT K15A</option>
                    <option value="CNTT K15B" {{ (old('class_name', $item->class_name ?? '') == 'CNTT K15B') ? 'selected' : '' }}>CNTT K15B</option>
                    <option value="KTPM K15A" {{ (old('class_name', $item->class_name ?? '') == 'KTPM K15A') ? 'selected' : '' }}>KTPM K15A</option>
                    <option value="HTTT K15A" {{ (old('class_name', $item->class_name ?? '') == 'HTTT K15A') ? 'selected' : '' }}>HTTT K15A</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Điểm trung bình (GPA) </label>
        <input type="number" step="any" name="gpa" value="{{ old('gpa', $item->gpa ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>nullable|numeric|between:0,4</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('students.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
