@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 10)
                </h4>
                <a href="{{ route('patients.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã bệnh nhân <span class="text-danger">*</span></label>
        <input type="text" name="patient_code" value="{{ old('patient_code', $item->patient_code ?? '') }}" class="form-control" placeholder="Nhập mã bệnh nhân...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Họ và tên bệnh nhân <span class="text-danger">*</span></label>
        <input type="text" name="fullname" value="{{ old('fullname', $item->fullname ?? '') }}" class="form-control" placeholder="Nhập họ và tên bệnh nhân...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số điện thoại liên hệ <span class="text-danger">*</span></label>
        <input type="text" name="phone" value="{{ old('phone', $item->phone ?? '') }}" class="form-control" placeholder="Nhập số điện thoại liên hệ...">
        <div class="form-text small">Quy tắc: <code>required|string|max:20</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày sinh <span class="text-danger">*</span></label>
        <input type="date" name="birthdate" value="{{ old('birthdate', $item->birthdate ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Giới tính <span class="text-danger">*</span></label>
        <select name="gender" class="form-select">
            <option value="">-- Chọn Giới tính --</option>
                    <option value="Nam" {{ (old('gender', $item->gender ?? '') == 'Nam') ? 'selected' : '' }}>Nam</option>
                    <option value="Nữ" {{ (old('gender', $item->gender ?? '') == 'Nữ') ? 'selected' : '' }}>Nữ</option>
                    <option value="Khác" {{ (old('gender', $item->gender ?? '') == 'Khác') ? 'selected' : '' }}>Khác</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Ghi chú bệnh án / triệu chứng </label>
        <textarea name="notes" rows="3" class="form-control" placeholder="Nhập ghi chú bệnh án / triệu chứng...">{{ old('notes', $item->notes ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('patients.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
