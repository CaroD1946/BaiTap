@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 49)
                </h4>
                <a href="{{ route('internships.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('internships.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã sinh viên <span class="text-danger">*</span></label>
        <input type="text" name="student_code" value="{{ old('student_code', $item->student_code ?? '') }}" class="form-control" placeholder="Nhập mã sinh viên...">
        <div class="form-text small">Quy tắc: <code>required|string|max:20</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Họ tên sinh viên <span class="text-danger">*</span></label>
        <input type="text" name="student_name" value="{{ old('student_name', $item->student_name ?? '') }}" class="form-control" placeholder="Nhập họ tên sinh viên...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Doanh nghiệp tiếp nhận <span class="text-danger">*</span></label>
        <input type="text" name="company_name" value="{{ old('company_name', $item->company_name ?? '') }}" class="form-control" placeholder="Nhập doanh nghiệp tiếp nhận...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Vị trí thực tập <span class="text-danger">*</span></label>
        <select name="internship_role" class="form-select">
            <option value="">-- Chọn Vị trí thực tập --</option>
                    <option value="Thực tập sinh Backend" {{ (old('internship_role', $item->internship_role ?? '') == 'Thực tập sinh Backend') ? 'selected' : '' }}>Thực tập sinh Backend</option>
                    <option value="Thực tập sinh Frontend" {{ (old('internship_role', $item->internship_role ?? '') == 'Thực tập sinh Frontend') ? 'selected' : '' }}>Thực tập sinh Frontend</option>
                    <option value="Thực tập sinh QA/QC" {{ (old('internship_role', $item->internship_role ?? '') == 'Thực tập sinh QA/QC') ? 'selected' : '' }}>Thực tập sinh QA/QC</option>
                    <option value="Thực tập sinh DevOps" {{ (old('internship_role', $item->internship_role ?? '') == 'Thực tập sinh DevOps') ? 'selected' : '' }}>Thực tập sinh DevOps</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày bắt đầu <span class="text-danger">*</span></label>
        <input type="date" name="start_date" value="{{ old('start_date', $item->start_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái xét duyệt <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái xét duyệt --</option>
                    <option value="Chờ khoa duyệt" {{ (old('status', $item->status ?? '') == 'Chờ khoa duyệt') ? 'selected' : '' }}>Chờ khoa duyệt</option>
                    <option value="Đã duyệt tiếp nhận" {{ (old('status', $item->status ?? '') == 'Đã duyệt tiếp nhận') ? 'selected' : '' }}>Đã duyệt tiếp nhận</option>
                    <option value="Đang thực tập" {{ (old('status', $item->status ?? '') == 'Đang thực tập') ? 'selected' : '' }}>Đang thực tập</option>
                    <option value="Đã nộp báo cáo" {{ (old('status', $item->status ?? '') == 'Đã nộp báo cáo') ? 'selected' : '' }}>Đã nộp báo cáo</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('internships.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
