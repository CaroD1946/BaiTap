@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 44)
                </h4>
                <a href="{{ route('purchase_requests.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('purchase_requests.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã yêu cầu mua hàng <span class="text-danger">*</span></label>
        <input type="text" name="request_code" value="{{ old('request_code', $item->request_code ?? '') }}" class="form-control" placeholder="Nhập mã yêu cầu mua hàng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Người đề xuất <span class="text-danger">*</span></label>
        <input type="text" name="requester_name" value="{{ old('requester_name', $item->requester_name ?? '') }}" class="form-control" placeholder="Nhập người đề xuất...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên mặt hàng cần mua <span class="text-danger">*</span></label>
        <input type="text" name="item_name" value="{{ old('item_name', $item->item_name ?? '') }}" class="form-control" placeholder="Nhập tên mặt hàng cần mua...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số lượng <span class="text-danger">*</span></label>
        <input type="number" step="any" name="quantity" value="{{ old('quantity', $item->quantity ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:1</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Đơn giá dự kiến (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="estimated_cost" value="{{ old('estimated_cost', $item->estimated_cost ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái xét duyệt <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái xét duyệt --</option>
                    <option value="Chờ phòng thu mua duyệt" {{ (old('status', $item->status ?? '') == 'Chờ phòng thu mua duyệt') ? 'selected' : '' }}>Chờ phòng thu mua duyệt</option>
                    <option value="Đang báo giá" {{ (old('status', $item->status ?? '') == 'Đang báo giá') ? 'selected' : '' }}>Đang báo giá</option>
                    <option value="Đã duyệt mua hàng" {{ (old('status', $item->status ?? '') == 'Đã duyệt mua hàng') ? 'selected' : '' }}>Đã duyệt mua hàng</option>
                    <option value="Hủy yêu cầu" {{ (old('status', $item->status ?? '') == 'Hủy yêu cầu') ? 'selected' : '' }}>Hủy yêu cầu</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('purchase_requests.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
