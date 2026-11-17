@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 09)
                </h4>
                <a href="{{ route('menu_items.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('menu_items.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên món ăn / thức uống <span class="text-danger">*</span></label>
        <input type="text" name="item_name" value="{{ old('item_name', $item->item_name ?? '') }}" class="form-control" placeholder="Nhập tên món ăn / thức uống...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Danh mục <span class="text-danger">*</span></label>
        <select name="category" class="form-select">
            <option value="">-- Chọn Danh mục --</option>
                    <option value="Khai vị" {{ (old('category', $item->category ?? '') == 'Khai vị') ? 'selected' : '' }}>Khai vị</option>
                    <option value="Món chính" {{ (old('category', $item->category ?? '') == 'Món chính') ? 'selected' : '' }}>Món chính</option>
                    <option value="Tráng miệng" {{ (old('category', $item->category ?? '') == 'Tráng miệng') ? 'selected' : '' }}>Tráng miệng</option>
                    <option value="Đồ uống" {{ (old('category', $item->category ?? '') == 'Đồ uống') ? 'selected' : '' }}>Đồ uống</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Đơn giá (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="price" value="{{ old('price', $item->price ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái phục vụ <span class="text-danger">*</span></label>
        <select name="is_available" class="form-select">
            <option value="">-- Chọn Trạng thái phục vụ --</option>
                    <option value="Đang phục vụ" {{ (old('is_available', $item->is_available ?? '') == 'Đang phục vụ') ? 'selected' : '' }}>Đang phục vụ</option>
                    <option value="Tạm hết hàng" {{ (old('is_available', $item->is_available ?? '') == 'Tạm hết hàng') ? 'selected' : '' }}>Tạm hết hàng</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Mô tả món ăn </label>
        <textarea name="description" rows="3" class="form-control" placeholder="Nhập mô tả món ăn...">{{ old('description', $item->description ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('menu_items.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
