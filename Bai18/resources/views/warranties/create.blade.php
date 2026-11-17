@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 18)
                </h4>
                <a href="{{ route('warranties.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('warranties.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã phiếu bảo hành <span class="text-danger">*</span></label>
        <input type="text" name="warranty_code" value="{{ old('warranty_code', $item->warranty_code ?? '') }}" class="form-control" placeholder="Nhập mã phiếu bảo hành...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên sản phẩm <span class="text-danger">*</span></label>
        <input type="text" name="product_name" value="{{ old('product_name', $item->product_name ?? '') }}" class="form-control" placeholder="Nhập tên sản phẩm...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên khách hàng <span class="text-danger">*</span></label>
        <input type="text" name="customer_name" value="{{ old('customer_name', $item->customer_name ?? '') }}" class="form-control" placeholder="Nhập tên khách hàng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày tiếp nhận <span class="text-danger">*</span></label>
        <input type="date" name="received_date" value="{{ old('received_date', $item->received_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tiến độ bảo hành <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Tiến độ bảo hành --</option>
                    <option value="Tiếp nhận" {{ (old('status', $item->status ?? '') == 'Tiếp nhận') ? 'selected' : '' }}>Tiếp nhận</option>
                    <option value="Đang sửa chữa" {{ (old('status', $item->status ?? '') == 'Đang sửa chữa') ? 'selected' : '' }}>Đang sửa chữa</option>
                    <option value="Chờ linh kiện" {{ (old('status', $item->status ?? '') == 'Chờ linh kiện') ? 'selected' : '' }}>Chờ linh kiện</option>
                    <option value="Đã hoàn thành" {{ (old('status', $item->status ?? '') == 'Đã hoàn thành') ? 'selected' : '' }}>Đã hoàn thành</option>
                    <option value="Đã trả khách" {{ (old('status', $item->status ?? '') == 'Đã trả khách') ? 'selected' : '' }}>Đã trả khách</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Mô tả lỗi sản phẩm <span class="text-danger">*</span></label>
        <textarea name="issue_description" rows="3" class="form-control" placeholder="Nhập mô tả lỗi sản phẩm...">{{ old('issue_description', $item->issue_description ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string|min:5</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('warranties.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
