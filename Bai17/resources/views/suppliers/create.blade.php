@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 17)
                </h4>
                <a href="{{ route('suppliers.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('suppliers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã nhà cung cấp <span class="text-danger">*</span></label>
        <input type="text" name="supplier_code" value="{{ old('supplier_code', $item->supplier_code ?? '') }}" class="form-control" placeholder="Nhập mã nhà cung cấp...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên nhà cung cấp <span class="text-danger">*</span></label>
        <input type="text" name="name" value="{{ old('name', $item->name ?? '') }}" class="form-control" placeholder="Nhập tên nhà cung cấp...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số điện thoại <span class="text-danger">*</span></label>
        <input type="text" name="phone" value="{{ old('phone', $item->phone ?? '') }}" class="form-control" placeholder="Nhập số điện thoại...">
        <div class="form-text small">Quy tắc: <code>required|string|max:20</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Email liên hệ <span class="text-danger">*</span></label>
        <input type="email" name="email" value="{{ old('email', $item->email ?? '') }}" class="form-control" placeholder="user@example.com">
        <div class="form-text small">Quy tắc: <code>required|email</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Địa chỉ <span class="text-danger">*</span></label>
        <input type="text" name="address" value="{{ old('address', $item->address ?? '') }}" class="form-control" placeholder="Nhập địa chỉ...">
        <div class="form-text small">Quy tắc: <code>required|string|max:255</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái hợp tác <span class="text-danger">*</span></label>
        <select name="cooperation_status" class="form-select">
            <option value="">-- Chọn Trạng thái hợp tác --</option>
                    <option value="Đang hợp tác" {{ (old('cooperation_status', $item->cooperation_status ?? '') == 'Đang hợp tác') ? 'selected' : '' }}>Đang hợp tác</option>
                    <option value="Tạm ngưng" {{ (old('cooperation_status', $item->cooperation_status ?? '') == 'Tạm ngưng') ? 'selected' : '' }}>Tạm ngưng</option>
                    <option value="Ngừng hợp tác" {{ (old('cooperation_status', $item->cooperation_status ?? '') == 'Ngừng hợp tác') ? 'selected' : '' }}>Ngừng hợp tác</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('suppliers.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
