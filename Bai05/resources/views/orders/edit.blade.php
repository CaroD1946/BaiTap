@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 05)
                </h4>
                <a href="{{ route('orders.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('orders.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã đơn hàng <span class="text-danger">*</span></label>
        <input type="text" name="order_code" value="{{ old('order_code', $item->order_code ?? '') }}" class="form-control" placeholder="Nhập mã đơn hàng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:50</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên khách hàng <span class="text-danger">*</span></label>
        <input type="text" name="customer_name" value="{{ old('customer_name', $item->customer_name ?? '') }}" class="form-control" placeholder="Nhập tên khách hàng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Địa chỉ giao hàng <span class="text-danger">*</span></label>
        <input type="text" name="shipping_address" value="{{ old('shipping_address', $item->shipping_address ?? '') }}" class="form-control" placeholder="Nhập địa chỉ giao hàng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:255</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tổng tiền (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="total_amount" value="{{ old('total_amount', $item->total_amount ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái đơn <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái đơn --</option>
                    <option value="Chờ xử lý" {{ (old('status', $item->status ?? '') == 'Chờ xử lý') ? 'selected' : '' }}>Chờ xử lý</option>
                    <option value="Đang giao hàng" {{ (old('status', $item->status ?? '') == 'Đang giao hàng') ? 'selected' : '' }}>Đang giao hàng</option>
                    <option value="Đã hoàn thành" {{ (old('status', $item->status ?? '') == 'Đã hoàn thành') ? 'selected' : '' }}>Đã hoàn thành</option>
                    <option value="Đã hủy" {{ (old('status', $item->status ?? '') == 'Đã hủy') ? 'selected' : '' }}>Đã hủy</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày đặt <span class="text-danger">*</span></label>
        <input type="date" name="order_date" value="{{ old('order_date', $item->order_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('orders.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
