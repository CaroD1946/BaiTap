@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 07)
                </h4>
                <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã nhân viên <span class="text-danger">*</span></label>
        <input type="text" name="employee_code" value="{{ old('employee_code', $item->employee_code ?? '') }}" class="form-control" placeholder="Nhập mã nhân viên...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Họ và tên <span class="text-danger">*</span></label>
        <input type="text" name="fullname" value="{{ old('fullname', $item->fullname ?? '') }}" class="form-control" placeholder="Nhập họ và tên...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Email công vụ <span class="text-danger">*</span></label>
        <input type="email" name="email" value="{{ old('email', $item->email ?? '') }}" class="form-control" placeholder="user@example.com">
        <div class="form-text small">Quy tắc: <code>required|email</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Phòng ban <span class="text-danger">*</span></label>
        <select name="department" class="form-select">
            <option value="">-- Chọn Phòng ban --</option>
                    <option value="Kỹ thuật phần mềm" {{ (old('department', $item->department ?? '') == 'Kỹ thuật phần mềm') ? 'selected' : '' }}>Kỹ thuật phần mềm</option>
                    <option value="Kinh doanh" {{ (old('department', $item->department ?? '') == 'Kinh doanh') ? 'selected' : '' }}>Kinh doanh</option>
                    <option value="Nhân sự" {{ (old('department', $item->department ?? '') == 'Nhân sự') ? 'selected' : '' }}>Nhân sự</option>
                    <option value="Kế toán" {{ (old('department', $item->department ?? '') == 'Kế toán') ? 'selected' : '' }}>Kế toán</option>
                    <option value="Marketing" {{ (old('department', $item->department ?? '') == 'Marketing') ? 'selected' : '' }}>Marketing</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mức lương (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="salary" value="{{ old('salary', $item->salary ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái làm việc <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái làm việc --</option>
                    <option value="Chính thức" {{ (old('status', $item->status ?? '') == 'Chính thức') ? 'selected' : '' }}>Chính thức</option>
                    <option value="Thử việc" {{ (old('status', $item->status ?? '') == 'Thử việc') ? 'selected' : '' }}>Thử việc</option>
                    <option value="Đã nghỉ việc" {{ (old('status', $item->status ?? '') == 'Đã nghỉ việc') ? 'selected' : '' }}>Đã nghỉ việc</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('employees.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
