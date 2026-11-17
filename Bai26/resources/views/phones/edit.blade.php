@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 26)
                </h4>
                <a href="{{ route('phones.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('phones.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã mẫu máy <span class="text-danger">*</span></label>
        <input type="text" name="phone_code" value="{{ old('phone_code', $item->phone_code ?? '') }}" class="form-control" placeholder="Nhập mã mẫu máy...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên điện thoại <span class="text-danger">*</span></label>
        <input type="text" name="phone_name" value="{{ old('phone_name', $item->phone_name ?? '') }}" class="form-control" placeholder="Nhập tên điện thoại...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Hãng sản xuất <span class="text-danger">*</span></label>
        <select name="brand" class="form-select">
            <option value="">-- Chọn Hãng sản xuất --</option>
                    <option value="Apple" {{ (old('brand', $item->brand ?? '') == 'Apple') ? 'selected' : '' }}>Apple</option>
                    <option value="Samsung" {{ (old('brand', $item->brand ?? '') == 'Samsung') ? 'selected' : '' }}>Samsung</option>
                    <option value="Xiaomi" {{ (old('brand', $item->brand ?? '') == 'Xiaomi') ? 'selected' : '' }}>Xiaomi</option>
                    <option value="OPPO" {{ (old('brand', $item->brand ?? '') == 'OPPO') ? 'selected' : '' }}>OPPO</option>
                    <option value="Sony" {{ (old('brand', $item->brand ?? '') == 'Sony') ? 'selected' : '' }}>Sony</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Giá niêm yết (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="price" value="{{ old('price', $item->price ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Dung lượng bộ nhớ <span class="text-danger">*</span></label>
        <select name="storage_gb" class="form-select">
            <option value="">-- Chọn Dung lượng bộ nhớ --</option>
                    <option value="64GB" {{ (old('storage_gb', $item->storage_gb ?? '') == '64GB') ? 'selected' : '' }}>64GB</option>
                    <option value="128GB" {{ (old('storage_gb', $item->storage_gb ?? '') == '128GB') ? 'selected' : '' }}>128GB</option>
                    <option value="256GB" {{ (old('storage_gb', $item->storage_gb ?? '') == '256GB') ? 'selected' : '' }}>256GB</option>
                    <option value="512GB" {{ (old('storage_gb', $item->storage_gb ?? '') == '512GB') ? 'selected' : '' }}>512GB</option>
                    <option value="1TB" {{ (old('storage_gb', $item->storage_gb ?? '') == '1TB') ? 'selected' : '' }}>1TB</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tồn kho máy mới <span class="text-danger">*</span></label>
        <input type="number" step="any" name="stock" value="{{ old('stock', $item->stock ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:0</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('phones.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
