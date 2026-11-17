@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 24)
                </h4>
                <a href="{{ route('equipments.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('equipments.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã thiết bị <span class="text-danger">*</span></label>
        <input type="text" name="equipment_code" value="{{ old('equipment_code', $item->equipment_code ?? '') }}" class="form-control" placeholder="Nhập mã thiết bị...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên thiết bị <span class="text-danger">*</span></label>
        <input type="text" name="name" value="{{ old('name', $item->name ?? '') }}" class="form-control" placeholder="Nhập tên thiết bị...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Phân loại <span class="text-danger">*</span></label>
        <select name="category" class="form-select">
            <option value="">-- Chọn Phân loại --</option>
                    <option value="Máy tính văn phòng" {{ (old('category', $item->category ?? '') == 'Máy tính văn phòng') ? 'selected' : '' }}>Máy tính văn phòng</option>
                    <option value="Máy in / Scan" {{ (old('category', $item->category ?? '') == 'Máy in / Scan') ? 'selected' : '' }}>Máy in / Scan</option>
                    <option value="Thiết bị mạng" {{ (old('category', $item->category ?? '') == 'Thiết bị mạng') ? 'selected' : '' }}>Thiết bị mạng</option>
                    <option value="Máy chiếu hội trường" {{ (old('category', $item->category ?? '') == 'Máy chiếu hội trường') ? 'selected' : '' }}>Máy chiếu hội trường</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày bàn giao <span class="text-danger">*</span></label>
        <input type="date" name="purchase_date" value="{{ old('purchase_date', $item->purchase_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tình trạng sử dụng <span class="text-danger">*</span></label>
        <select name="condition_status" class="form-select">
            <option value="">-- Chọn Tình trạng sử dụng --</option>
                    <option value="Hoạt động tốt" {{ (old('condition_status', $item->condition_status ?? '') == 'Hoạt động tốt') ? 'selected' : '' }}>Hoạt động tốt</option>
                    <option value="Cần bảo dưỡng" {{ (old('condition_status', $item->condition_status ?? '') == 'Cần bảo dưỡng') ? 'selected' : '' }}>Cần bảo dưỡng</option>
                    <option value="Hỏng hóc" {{ (old('condition_status', $item->condition_status ?? '') == 'Hỏng hóc') ? 'selected' : '' }}>Hỏng hóc</option>
                    <option value="Thanh lý" {{ (old('condition_status', $item->condition_status ?? '') == 'Thanh lý') ? 'selected' : '' }}>Thanh lý</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Ghi chú cấu hình </label>
        <textarea name="notes" rows="3" class="form-control" placeholder="Nhập ghi chú cấu hình...">{{ old('notes', $item->notes ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('equipments.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
