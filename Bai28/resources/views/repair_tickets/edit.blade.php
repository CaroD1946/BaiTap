@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 28)
                </h4>
                <a href="{{ route('repair_tickets.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('repair_tickets.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã tiếp nhận sửa chữa <span class="text-danger">*</span></label>
        <input type="text" name="ticket_code" value="{{ old('ticket_code', $item->ticket_code ?? '') }}" class="form-control" placeholder="Nhập mã tiếp nhận sửa chữa...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Họ tên khách hàng <span class="text-danger">*</span></label>
        <input type="text" name="customer_name" value="{{ old('customer_name', $item->customer_name ?? '') }}" class="form-control" placeholder="Nhập họ tên khách hàng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên dòng máy / Laptop <span class="text-danger">*</span></label>
        <input type="text" name="device_model" value="{{ old('device_model', $item->device_model ?? '') }}" class="form-control" placeholder="Nhập tên dòng máy / laptop...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Chi phí dự kiến (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="estimated_cost" value="{{ old('estimated_cost', $item->estimated_cost ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái sửa chữa <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái sửa chữa --</option>
                    <option value="Tiếp nhận" {{ (old('status', $item->status ?? '') == 'Tiếp nhận') ? 'selected' : '' }}>Tiếp nhận</option>
                    <option value="Đang kiểm tra" {{ (old('status', $item->status ?? '') == 'Đang kiểm tra') ? 'selected' : '' }}>Đang kiểm tra</option>
                    <option value="Chờ linh kiện thay thế" {{ (old('status', $item->status ?? '') == 'Chờ linh kiện thay thế') ? 'selected' : '' }}>Chờ linh kiện thay thế</option>
                    <option value="Đã sửa xong" {{ (old('status', $item->status ?? '') == 'Đã sửa xong') ? 'selected' : '' }}>Đã sửa xong</option>
                    <option value="Đã giao máy" {{ (old('status', $item->status ?? '') == 'Đã giao máy') ? 'selected' : '' }}>Đã giao máy</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Triệu chứng lỗi <span class="text-danger">*</span></label>
        <textarea name="defect_description" rows="3" class="form-control" placeholder="Nhập triệu chứng lỗi...">{{ old('defect_description', $item->defect_description ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string|min:5</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('repair_tickets.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
