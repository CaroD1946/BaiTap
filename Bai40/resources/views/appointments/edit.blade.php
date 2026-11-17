@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 40)
                </h4>
                <a href="{{ route('appointments.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('appointments.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên khách hàng <span class="text-danger">*</span></label>
        <input type="text" name="customer_name" value="{{ old('customer_name', $item->customer_name ?? '') }}" class="form-control" placeholder="Nhập tên khách hàng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số điện thoại <span class="text-danger">*</span></label>
        <input type="text" name="phone" value="{{ old('phone', $item->phone ?? '') }}" class="form-control" placeholder="Nhập số điện thoại...">
        <div class="form-text small">Quy tắc: <code>required|string|max:20</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Dịch vụ hẹn trước <span class="text-danger">*</span></label>
        <select name="service_name" class="form-select">
            <option value="">-- Chọn Dịch vụ hẹn trước --</option>
                    <option value="Khám sức khỏe tổng quát" {{ (old('service_name', $item->service_name ?? '') == 'Khám sức khỏe tổng quát') ? 'selected' : '' }}>Khám sức khỏe tổng quát</option>
                    <option value="Tư vấn tài chính" {{ (old('service_name', $item->service_name ?? '') == 'Tư vấn tài chính') ? 'selected' : '' }}>Tư vấn tài chính</option>
                    <option value="Chăm sóc da spa" {{ (old('service_name', $item->service_name ?? '') == 'Chăm sóc da spa') ? 'selected' : '' }}>Chăm sóc da spa</option>
                    <option value="Bảo dưỡng xe định kỳ" {{ (old('service_name', $item->service_name ?? '') == 'Bảo dưỡng xe định kỳ') ? 'selected' : '' }}>Bảo dưỡng xe định kỳ</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày hẹn <span class="text-danger">*</span></label>
        <input type="date" name="appointment_date" value="{{ old('appointment_date', $item->appointment_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Khung giờ hẹn <span class="text-danger">*</span></label>
        <select name="appointment_time" class="form-select">
            <option value="">-- Chọn Khung giờ hẹn --</option>
                    <option value="08:30 - 09:30" {{ (old('appointment_time', $item->appointment_time ?? '') == '08:30 - 09:30') ? 'selected' : '' }}>08:30 - 09:30</option>
                    <option value="10:00 - 11:00" {{ (old('appointment_time', $item->appointment_time ?? '') == '10:00 - 11:00') ? 'selected' : '' }}>10:00 - 11:00</option>
                    <option value="14:00 - 15:00" {{ (old('appointment_time', $item->appointment_time ?? '') == '14:00 - 15:00') ? 'selected' : '' }}>14:00 - 15:00</option>
                    <option value="16:00 - 17:00" {{ (old('appointment_time', $item->appointment_time ?? '') == '16:00 - 17:00') ? 'selected' : '' }}>16:00 - 17:00</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái --</option>
                    <option value="Đã đặt hẹn" {{ (old('status', $item->status ?? '') == 'Đã đặt hẹn') ? 'selected' : '' }}>Đã đặt hẹn</option>
                    <option value="Đã xác nhận điện thoại" {{ (old('status', $item->status ?? '') == 'Đã xác nhận điện thoại') ? 'selected' : '' }}>Đã xác nhận điện thoại</option>
                    <option value="Khách đã đến" {{ (old('status', $item->status ?? '') == 'Khách đã đến') ? 'selected' : '' }}>Khách đã đến</option>
                    <option value="Hủy hẹn" {{ (old('status', $item->status ?? '') == 'Hủy hẹn') ? 'selected' : '' }}>Hủy hẹn</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('appointments.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
