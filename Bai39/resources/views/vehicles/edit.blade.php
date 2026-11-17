@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 39)
                </h4>
                <a href="{{ route('vehicles.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('vehicles.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Biển số xe <span class="text-danger">*</span></label>
        <input type="text" name="license_plate" value="{{ old('license_plate', $item->license_plate ?? '') }}" class="form-control" placeholder="Nhập biển số xe...">
        <div class="form-text small">Quy tắc: <code>required|string|max:20</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Loại phương tiện <span class="text-danger">*</span></label>
        <select name="vehicle_type" class="form-select">
            <option value="">-- Chọn Loại phương tiện --</option>
                    <option value="Xe tải nhẹ (1.5 tấn)" {{ (old('vehicle_type', $item->vehicle_type ?? '') == 'Xe tải nhẹ (1.5 tấn)') ? 'selected' : '' }}>Xe tải nhẹ (1.5 tấn)</option>
                    <option value="Xe tải vừa (5 tấn)" {{ (old('vehicle_type', $item->vehicle_type ?? '') == 'Xe tải vừa (5 tấn)') ? 'selected' : '' }}>Xe tải vừa (5 tấn)</option>
                    <option value="Xe container" {{ (old('vehicle_type', $item->vehicle_type ?? '') == 'Xe container') ? 'selected' : '' }}>Xe container</option>
                    <option value="Xe đầu kéo" {{ (old('vehicle_type', $item->vehicle_type ?? '') == 'Xe đầu kéo') ? 'selected' : '' }}>Xe đầu kéo</option>
                    <option value="Xe bán tải" {{ (old('vehicle_type', $item->vehicle_type ?? '') == 'Xe bán tải') ? 'selected' : '' }}>Xe bán tải</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tải trọng (Tấn) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="payload_tons" value="{{ old('payload_tons', $item->payload_tons ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0.5</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày hết hạn đăng kiểm <span class="text-danger">*</span></label>
        <input type="date" name="inspection_date" value="{{ old('inspection_date', $item->inspection_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tình trạng vận hành <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Tình trạng vận hành --</option>
                    <option value="Sẵn sàng chạy" {{ (old('status', $item->status ?? '') == 'Sẵn sàng chạy') ? 'selected' : '' }}>Sẵn sàng chạy</option>
                    <option value="Đang chở hàng" {{ (old('status', $item->status ?? '') == 'Đang chở hàng') ? 'selected' : '' }}>Đang chở hàng</option>
                    <option value="Đang bảo trì định kỳ" {{ (old('status', $item->status ?? '') == 'Đang bảo trì định kỳ') ? 'selected' : '' }}>Đang bảo trì định kỳ</option>
                    <option value="Hỏng hóc" {{ (old('status', $item->status ?? '') == 'Hỏng hóc') ? 'selected' : '' }}>Hỏng hóc</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tài xế phụ trách </label>
        <input type="text" name="driver_name" value="{{ old('driver_name', $item->driver_name ?? '') }}" class="form-control" placeholder="Nhập tài xế phụ trách...">
        <div class="form-text small">Quy tắc: <code>nullable|string|max:100</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('vehicles.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
