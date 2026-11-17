@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 34)
                </h4>
                <a href="{{ route('customers.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('customers.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Họ tên khách hàng <span class="text-danger">*</span></label>
        <input type="text" name="fullname" value="{{ old('fullname', $item->fullname ?? '') }}" class="form-control" placeholder="Nhập họ tên khách hàng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số điện thoại <span class="text-danger">*</span></label>
        <input type="text" name="phone" value="{{ old('phone', $item->phone ?? '') }}" class="form-control" placeholder="Nhập số điện thoại...">
        <div class="form-text small">Quy tắc: <code>required|string|max:20</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Email <span class="text-danger">*</span></label>
        <input type="email" name="email" value="{{ old('email', $item->email ?? '') }}" class="form-control" placeholder="user@example.com">
        <div class="form-text small">Quy tắc: <code>required|email</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Nguồn khách hàng <span class="text-danger">*</span></label>
        <select name="customer_source" class="form-select">
            <option value="">-- Chọn Nguồn khách hàng --</option>
                    <option value="Facebook Ads" {{ (old('customer_source', $item->customer_source ?? '') == 'Facebook Ads') ? 'selected' : '' }}>Facebook Ads</option>
                    <option value="Google Search" {{ (old('customer_source', $item->customer_source ?? '') == 'Google Search') ? 'selected' : '' }}>Google Search</option>
                    <option value="Giới thiệu bạn bè" {{ (old('customer_source', $item->customer_source ?? '') == 'Giới thiệu bạn bè') ? 'selected' : '' }}>Giới thiệu bạn bè</option>
                    <option value="Hội thảo trực tiếp" {{ (old('customer_source', $item->customer_source ?? '') == 'Hội thảo trực tiếp') ? 'selected' : '' }}>Hội thảo trực tiếp</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Phân loại khách hàng <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Phân loại khách hàng --</option>
                    <option value="Khách hàng tiềm năng" {{ (old('status', $item->status ?? '') == 'Khách hàng tiềm năng') ? 'selected' : '' }}>Khách hàng tiềm năng</option>
                    <option value="Đang tư vấn" {{ (old('status', $item->status ?? '') == 'Đang tư vấn') ? 'selected' : '' }}>Đang tư vấn</option>
                    <option value="Đã ký hợp đồng" {{ (old('status', $item->status ?? '') == 'Đã ký hợp đồng') ? 'selected' : '' }}>Đã ký hợp đồng</option>
                    <option value="Khách VIP" {{ (old('status', $item->status ?? '') == 'Khách VIP') ? 'selected' : '' }}>Khách VIP</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Địa chỉ liên hệ </label>
        <input type="text" name="address" value="{{ old('address', $item->address ?? '') }}" class="form-control" placeholder="Nhập địa chỉ liên hệ...">
        <div class="form-text small">Quy tắc: <code>nullable|string|max:255</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('customers.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
