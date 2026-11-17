@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 38)
                </h4>
                <a href="{{ route('bookings.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã đặt phòng <span class="text-danger">*</span></label>
        <input type="text" name="booking_code" value="{{ old('booking_code', $item->booking_code ?? '') }}" class="form-control" placeholder="Nhập mã đặt phòng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên khách lưu trú <span class="text-danger">*</span></label>
        <input type="text" name="guest_name" value="{{ old('guest_name', $item->guest_name ?? '') }}" class="form-control" placeholder="Nhập tên khách lưu trú...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Hạng phòng <span class="text-danger">*</span></label>
        <select name="room_type" class="form-select">
            <option value="">-- Chọn Hạng phòng --</option>
                    <option value="Standard" {{ (old('room_type', $item->room_type ?? '') == 'Standard') ? 'selected' : '' }}>Standard</option>
                    <option value="Deluxe Room" {{ (old('room_type', $item->room_type ?? '') == 'Deluxe Room') ? 'selected' : '' }}>Deluxe Room</option>
                    <option value="Suite Cao Cấp" {{ (old('room_type', $item->room_type ?? '') == 'Suite Cao Cấp') ? 'selected' : '' }}>Suite Cao Cấp</option>
                    <option value="Presidential Suite" {{ (old('room_type', $item->room_type ?? '') == 'Presidential Suite') ? 'selected' : '' }}>Presidential Suite</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày nhận phòng <span class="text-danger">*</span></label>
        <input type="date" name="checkin_date" value="{{ old('checkin_date', $item->checkin_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày trả phòng <span class="text-danger">*</span></label>
        <input type="date" name="checkout_date" value="{{ old('checkout_date', $item->checkout_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tình trạng đặt phòng <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Tình trạng đặt phòng --</option>
                    <option value="Đã xác nhận" {{ (old('status', $item->status ?? '') == 'Đã xác nhận') ? 'selected' : '' }}>Đã xác nhận</option>
                    <option value="Đã cọc tiền" {{ (old('status', $item->status ?? '') == 'Đã cọc tiền') ? 'selected' : '' }}>Đã cọc tiền</option>
                    <option value="Đã nhận phòng (Check-in)" {{ (old('status', $item->status ?? '') == 'Đã nhận phòng (Check-in)') ? 'selected' : '' }}>Đã nhận phòng (Check-in)</option>
                    <option value="Đã hoàn thành" {{ (old('status', $item->status ?? '') == 'Đã hoàn thành') ? 'selected' : '' }}>Đã hoàn thành</option>
                    <option value="Đã hủy" {{ (old('status', $item->status ?? '') == 'Đã hủy') ? 'selected' : '' }}>Đã hủy</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('bookings.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
