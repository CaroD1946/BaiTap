@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 41)
                </h4>
                <a href="{{ route('expenses.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('expenses.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên khoản chi phí <span class="text-danger">*</span></label>
        <input type="text" name="expense_title" value="{{ old('expense_title', $item->expense_title ?? '') }}" class="form-control" placeholder="Nhập tên khoản chi phí...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Danh mục chi phí <span class="text-danger">*</span></label>
        <select name="category" class="form-select">
            <option value="">-- Chọn Danh mục chi phí --</option>
                    <option value="Thiết bị văn phòng" {{ (old('category', $item->category ?? '') == 'Thiết bị văn phòng') ? 'selected' : '' }}>Thiết bị văn phòng</option>
                    <option value="Chi phí tiếp khách" {{ (old('category', $item->category ?? '') == 'Chi phí tiếp khách') ? 'selected' : '' }}>Chi phí tiếp khách</option>
                    <option value="Đi lại công tác" {{ (old('category', $item->category ?? '') == 'Đi lại công tác') ? 'selected' : '' }}>Đi lại công tác</option>
                    <option value="Thuê dịch vụ ngoài" {{ (old('category', $item->category ?? '') == 'Thuê dịch vụ ngoài') ? 'selected' : '' }}>Thuê dịch vụ ngoài</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số tiền (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="amount" value="{{ old('amount', $item->amount ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày phát sinh chi phí <span class="text-danger">*</span></label>
        <input type="date" name="expense_date" value="{{ old('expense_date', $item->expense_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Người đề xuất chi <span class="text-danger">*</span></label>
        <input type="text" name="proposer" value="{{ old('proposer', $item->proposer ?? '') }}" class="form-control" placeholder="Nhập người đề xuất chi...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tình trạng duyệt <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Tình trạng duyệt --</option>
                    <option value="Chờ quản lý duyệt" {{ (old('status', $item->status ?? '') == 'Chờ quản lý duyệt') ? 'selected' : '' }}>Chờ quản lý duyệt</option>
                    <option value="Đã phê duyệt" {{ (old('status', $item->status ?? '') == 'Đã phê duyệt') ? 'selected' : '' }}>Đã phê duyệt</option>
                    <option value="Đã chi tiền" {{ (old('status', $item->status ?? '') == 'Đã chi tiền') ? 'selected' : '' }}>Đã chi tiền</option>
                    <option value="Bị từ chối" {{ (old('status', $item->status ?? '') == 'Bị từ chối') ? 'selected' : '' }}>Bị từ chối</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('expenses.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
