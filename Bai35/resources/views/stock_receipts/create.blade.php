@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 35)
                </h4>
                <a href="{{ route('stock_receipts.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('stock_receipts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã phiếu nhập kho <span class="text-danger">*</span></label>
        <input type="text" name="receipt_code" value="{{ old('receipt_code', $item->receipt_code ?? '') }}" class="form-control" placeholder="Nhập mã phiếu nhập kho...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Nhà cung cấp <span class="text-danger">*</span></label>
        <input type="text" name="supplier_name" value="{{ old('supplier_name', $item->supplier_name ?? '') }}" class="form-control" placeholder="Nhập nhà cung cấp...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày nhập kho <span class="text-danger">*</span></label>
        <input type="date" name="receipt_date" value="{{ old('receipt_date', $item->receipt_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tổng số lượng nhập <span class="text-danger">*</span></label>
        <input type="number" step="any" name="total_quantity" value="{{ old('total_quantity', $item->total_quantity ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:1</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tổng giá trị lô hàng (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="total_cost" value="{{ old('total_cost', $item->total_cost ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Ghi chú kiểm hàng </label>
        <textarea name="notes" rows="3" class="form-control" placeholder="Nhập ghi chú kiểm hàng...">{{ old('notes', $item->notes ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('stock_receipts.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
