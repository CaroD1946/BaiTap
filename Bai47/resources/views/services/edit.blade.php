@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 47)
                </h4>
                <a href="{{ route('services.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('services.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã gói dịch vụ <span class="text-danger">*</span></label>
        <input type="text" name="service_code" value="{{ old('service_code', $item->service_code ?? '') }}" class="form-control" placeholder="Nhập mã gói dịch vụ...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên gói dịch vụ <span class="text-danger">*</span></label>
        <input type="text" name="service_name" value="{{ old('service_name', $item->service_name ?? '') }}" class="form-control" placeholder="Nhập tên gói dịch vụ...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Nhóm dịch vụ <span class="text-danger">*</span></label>
        <select name="service_type" class="form-select">
            <option value="">-- Chọn Nhóm dịch vụ --</option>
                    <option value="Dịch vụ Lưu trữ Cloud" {{ (old('service_type', $item->service_type ?? '') == 'Dịch vụ Lưu trữ Cloud') ? 'selected' : '' }}>Dịch vụ Lưu trữ Cloud</option>
                    <option value="Bảo trì phần mềm" {{ (old('service_type', $item->service_type ?? '') == 'Bảo trì phần mềm') ? 'selected' : '' }}>Bảo trì phần mềm</option>
                    <option value="Thiết kế Website" {{ (old('service_type', $item->service_type ?? '') == 'Thiết kế Website') ? 'selected' : '' }}>Thiết kế Website</option>
                    <option value="Tư vấn bảo mật" {{ (old('service_type', $item->service_type ?? '') == 'Tư vấn bảo mật') ? 'selected' : '' }}>Tư vấn bảo mật</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Giá cước hàng tháng (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="price" value="{{ old('price', $item->price ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Thời hạn hợp đồng (tháng) <span class="text-danger">*</span></label>
        <select name="duration_months" class="form-select">
            <option value="">-- Chọn Thời hạn hợp đồng (tháng) --</option>
                    <option value="1 tháng" {{ (old('duration_months', $item->duration_months ?? '') == '1 tháng') ? 'selected' : '' }}>1 tháng</option>
                    <option value="6 tháng" {{ (old('duration_months', $item->duration_months ?? '') == '6 tháng') ? 'selected' : '' }}>6 tháng</option>
                    <option value="12 tháng" {{ (old('duration_months', $item->duration_months ?? '') == '12 tháng') ? 'selected' : '' }}>12 tháng</option>
                    <option value="24 tháng" {{ (old('duration_months', $item->duration_months ?? '') == '24 tháng') ? 'selected' : '' }}>24 tháng</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tình trạng cung cấp <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Tình trạng cung cấp --</option>
                    <option value="Đang cung cấp" {{ (old('status', $item->status ?? '') == 'Đang cung cấp') ? 'selected' : '' }}>Đang cung cấp</option>
                    <option value="Tạm ngừng đăng ký mới" {{ (old('status', $item->status ?? '') == 'Tạm ngừng đăng ký mới') ? 'selected' : '' }}>Tạm ngừng đăng ký mới</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('services.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
