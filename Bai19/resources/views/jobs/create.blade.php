@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 19)
                </h4>
                <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Chức danh tuyển dụng <span class="text-danger">*</span></label>
        <input type="text" name="job_title" value="{{ old('job_title', $item->job_title ?? '') }}" class="form-control" placeholder="Nhập chức danh tuyển dụng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Phòng ban / Đội ngũ <span class="text-danger">*</span></label>
        <select name="department" class="form-select">
            <option value="">-- Chọn Phòng ban / Đội ngũ --</option>
                    <option value="Công nghệ" {{ (old('department', $item->department ?? '') == 'Công nghệ') ? 'selected' : '' }}>Công nghệ</option>
                    <option value="Kinh doanh" {{ (old('department', $item->department ?? '') == 'Kinh doanh') ? 'selected' : '' }}>Kinh doanh</option>
                    <option value="Nhân sự" {{ (old('department', $item->department ?? '') == 'Nhân sự') ? 'selected' : '' }}>Nhân sự</option>
                    <option value="Tài chính" {{ (old('department', $item->department ?? '') == 'Tài chính') ? 'selected' : '' }}>Tài chính</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mức lương đề xuất <span class="text-danger">*</span></label>
        <input type="text" name="salary_range" value="{{ old('salary_range', $item->salary_range ?? '') }}" class="form-control" placeholder="Nhập mức lương đề xuất...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Hạn nộp hồ sơ <span class="text-danger">*</span></label>
        <input type="date" name="deadline" value="{{ old('deadline', $item->deadline ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái tin <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái tin --</option>
                    <option value="Đang nhận hồ sơ" {{ (old('status', $item->status ?? '') == 'Đang nhận hồ sơ') ? 'selected' : '' }}>Đang nhận hồ sơ</option>
                    <option value="Đang phỏng vấn" {{ (old('status', $item->status ?? '') == 'Đang phỏng vấn') ? 'selected' : '' }}>Đang phỏng vấn</option>
                    <option value="Đã tuyển đủ" {{ (old('status', $item->status ?? '') == 'Đã tuyển đủ') ? 'selected' : '' }}>Đã tuyển đủ</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Yêu cầu ứng viên <span class="text-danger">*</span></label>
        <textarea name="requirements" rows="3" class="form-control" placeholder="Nhập yêu cầu ứng viên...">{{ old('requirements', $item->requirements ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('jobs.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
