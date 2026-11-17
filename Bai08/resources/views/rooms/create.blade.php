@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 08)
                </h4>
                <a href="{{ route('rooms.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã số phòng <span class="text-danger">*</span></label>
        <input type="text" name="room_code" value="{{ old('room_code', $item->room_code ?? '') }}" class="form-control" placeholder="Nhập mã số phòng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Loại phòng <span class="text-danger">*</span></label>
        <select name="room_type" class="form-select">
            <option value="">-- Chọn Loại phòng --</option>
                    <option value="Phòng đơn" {{ (old('room_type', $item->room_type ?? '') == 'Phòng đơn') ? 'selected' : '' }}>Phòng đơn</option>
                    <option value="Phòng đôi" {{ (old('room_type', $item->room_type ?? '') == 'Phòng đôi') ? 'selected' : '' }}>Phòng đôi</option>
                    <option value="Căn hộ mini" {{ (old('room_type', $item->room_type ?? '') == 'Căn hộ mini') ? 'selected' : '' }}>Căn hộ mini</option>
                    <option value="Studio" {{ (old('room_type', $item->room_type ?? '') == 'Studio') ? 'selected' : '' }}>Studio</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Diện tích (m²) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="area_m2" value="{{ old('area_m2', $item->area_m2 ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:5</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Giá thuê / tháng (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="rent_price" value="{{ old('rent_price', $item->rent_price ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái --</option>
                    <option value="Còn trống" {{ (old('status', $item->status ?? '') == 'Còn trống') ? 'selected' : '' }}>Còn trống</option>
                    <option value="Đã cho thuê" {{ (old('status', $item->status ?? '') == 'Đã cho thuê') ? 'selected' : '' }}>Đã cho thuê</option>
                    <option value="Đang sửa chữa" {{ (old('status', $item->status ?? '') == 'Đang sửa chữa') ? 'selected' : '' }}>Đang sửa chữa</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Mô tả & Tiện ích </label>
        <textarea name="description" rows="3" class="form-control" placeholder="Nhập mô tả & tiện ích...">{{ old('description', $item->description ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('rooms.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
