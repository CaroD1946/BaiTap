@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 02)
                </h4>
                <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã sản phẩm <span class="text-danger">*</span></label>
        <input type="text" name="product_code" value="{{ old('product_code', $item->product_code ?? '') }}" class="form-control" placeholder="Nhập mã sản phẩm...">
        <div class="form-text small">Quy tắc: <code>required|string|max:50</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên sản phẩm <span class="text-danger">*</span></label>
        <input type="text" name="name" value="{{ old('name', $item->name ?? '') }}" class="form-control" placeholder="Nhập tên sản phẩm...">
        <div class="form-text small">Quy tắc: <code>required|string|min:3|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Danh mục <span class="text-danger">*</span></label>
        <select name="category" class="form-select">
            <option value="">-- Chọn Danh mục --</option>
                    <option value="Điện thoại" {{ (old('category', $item->category ?? '') == 'Điện thoại') ? 'selected' : '' }}>Điện thoại</option>
                    <option value="Laptop" {{ (old('category', $item->category ?? '') == 'Laptop') ? 'selected' : '' }}>Laptop</option>
                    <option value="Phụ kiện" {{ (old('category', $item->category ?? '') == 'Phụ kiện') ? 'selected' : '' }}>Phụ kiện</option>
                    <option value="Gia dụng" {{ (old('category', $item->category ?? '') == 'Gia dụng') ? 'selected' : '' }}>Gia dụng</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Giá bán (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="price" value="{{ old('price', $item->price ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số lượng tồn <span class="text-danger">*</span></label>
        <input type="number" step="any" name="stock" value="{{ old('stock', $item->stock ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:0</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Mô tả sản phẩm </label>
        <textarea name="description" rows="3" class="form-control" placeholder="Nhập mô tả sản phẩm...">{{ old('description', $item->description ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('products.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
