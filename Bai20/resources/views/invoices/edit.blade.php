@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 20)
                </h4>
                <a href="{{ route('invoices.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('invoices.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã hóa đơn <span class="text-danger">*</span></label>
        <input type="text" name="invoice_code" value="{{ old('invoice_code', $item->invoice_code ?? '') }}" class="form-control" placeholder="Nhập mã hóa đơn...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên khách hàng <span class="text-danger">*</span></label>
        <input type="text" name="customer_name" value="{{ old('customer_name', $item->customer_name ?? '') }}" class="form-control" placeholder="Nhập tên khách hàng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày lập hóa đơn <span class="text-danger">*</span></label>
        <input type="date" name="created_date" value="{{ old('created_date', $item->created_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tổng tiền thanh toán (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="total_amount" value="{{ old('total_amount', $item->total_amount ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái thanh toán <span class="text-danger">*</span></label>
        <select name="payment_status" class="form-select">
            <option value="">-- Chọn Trạng thái thanh toán --</option>
                    <option value="Chưa thanh toán" {{ (old('payment_status', $item->payment_status ?? '') == 'Chưa thanh toán') ? 'selected' : '' }}>Chưa thanh toán</option>
                    <option value="Đã thanh toán một phần" {{ (old('payment_status', $item->payment_status ?? '') == 'Đã thanh toán một phần') ? 'selected' : '' }}>Đã thanh toán một phần</option>
                    <option value="Đã thanh toán đầy đủ" {{ (old('payment_status', $item->payment_status ?? '') == 'Đã thanh toán đầy đủ') ? 'selected' : '' }}>Đã thanh toán đầy đủ</option>
                    <option value="Đã hủy" {{ (old('payment_status', $item->payment_status ?? '') == 'Đã hủy') ? 'selected' : '' }}>Đã hủy</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Ghi chú hóa đơn </label>
        <textarea name="notes" rows="3" class="form-control" placeholder="Nhập ghi chú hóa đơn...">{{ old('notes', $item->notes ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('invoices.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
