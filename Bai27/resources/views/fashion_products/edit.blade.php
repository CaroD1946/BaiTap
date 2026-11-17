@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 27)
                </h4>
                <a href="{{ route('fashion_products.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('fashion_products.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã sản phẩm thời trang <span class="text-danger">*</span></label>
        <input type="text" name="product_code" value="{{ old('product_code', $item->product_code ?? '') }}" class="form-control" placeholder="Nhập mã sản phẩm thời trang...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên trang phục <span class="text-danger">*</span></label>
        <input type="text" name="name" value="{{ old('name', $item->name ?? '') }}" class="form-control" placeholder="Nhập tên trang phục...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Danh mục <span class="text-danger">*</span></label>
        <select name="category" class="form-select">
            <option value="">-- Chọn Danh mục --</option>
                    <option value="Áo sơ mi" {{ (old('category', $item->category ?? '') == 'Áo sơ mi') ? 'selected' : '' }}>Áo sơ mi</option>
                    <option value="Áo thun" {{ (old('category', $item->category ?? '') == 'Áo thun') ? 'selected' : '' }}>Áo thun</option>
                    <option value="Quần jean" {{ (old('category', $item->category ?? '') == 'Quần jean') ? 'selected' : '' }}>Quần jean</option>
                    <option value="Váy đầm" {{ (old('category', $item->category ?? '') == 'Váy đầm') ? 'selected' : '' }}>Váy đầm</option>
                    <option value="Áo khoác" {{ (old('category', $item->category ?? '') == 'Áo khoác') ? 'selected' : '' }}>Áo khoác</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Kích cỡ (Size) <span class="text-danger">*</span></label>
        <select name="size" class="form-select">
            <option value="">-- Chọn Kích cỡ (Size) --</option>
                    <option value="S" {{ (old('size', $item->size ?? '') == 'S') ? 'selected' : '' }}>S</option>
                    <option value="M" {{ (old('size', $item->size ?? '') == 'M') ? 'selected' : '' }}>M</option>
                    <option value="L" {{ (old('size', $item->size ?? '') == 'L') ? 'selected' : '' }}>L</option>
                    <option value="XL" {{ (old('size', $item->size ?? '') == 'XL') ? 'selected' : '' }}>XL</option>
                    <option value="XXL" {{ (old('size', $item->size ?? '') == 'XXL') ? 'selected' : '' }}>XXL</option>
                    <option value="Free size" {{ (old('size', $item->size ?? '') == 'Free size') ? 'selected' : '' }}>Free size</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Giá bán (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="price" value="{{ old('price', $item->price ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số lượng trong kho <span class="text-danger">*</span></label>
        <input type="number" step="any" name="stock" value="{{ old('stock', $item->stock ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:0</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('fashion_products.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
