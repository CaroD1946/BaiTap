@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 14)
                </h4>
                <a href="{{ route('inventory_items.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('inventory_items.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã hàng tồn kho <span class="text-danger">*</span></label>
        <input type="text" name="item_code" value="{{ old('item_code', $item->item_code ?? '') }}" class="form-control" placeholder="Nhập mã hàng tồn kho...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên mặt hàng <span class="text-danger">*</span></label>
        <input type="text" name="item_name" value="{{ old('item_name', $item->item_name ?? '') }}" class="form-control" placeholder="Nhập tên mặt hàng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Vị trí kho <span class="text-danger">*</span></label>
        <select name="warehouse_location" class="form-select">
            <option value="">-- Chọn Vị trí kho --</option>
                    <option value="Kho Tổng A" {{ (old('warehouse_location', $item->warehouse_location ?? '') == 'Kho Tổng A') ? 'selected' : '' }}>Kho Tổng A</option>
                    <option value="Kho B - Phía Đông" {{ (old('warehouse_location', $item->warehouse_location ?? '') == 'Kho B - Phía Đông') ? 'selected' : '' }}>Kho B - Phía Đông</option>
                    <option value="Kho C - Dự phòng" {{ (old('warehouse_location', $item->warehouse_location ?? '') == 'Kho C - Dự phòng') ? 'selected' : '' }}>Kho C - Dự phòng</option>
                    <option value="Kho Lạnh" {{ (old('warehouse_location', $item->warehouse_location ?? '') == 'Kho Lạnh') ? 'selected' : '' }}>Kho Lạnh</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số lượng tồn <span class="text-danger">*</span></label>
        <input type="number" step="any" name="quantity" value="{{ old('quantity', $item->quantity ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Đơn giá nhập (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="unit_price" value="{{ old('unit_price', $item->unit_price ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Ghi chú </label>
        <textarea name="notes" rows="3" class="form-control" placeholder="Nhập ghi chú...">{{ old('notes', $item->notes ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('inventory_items.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
