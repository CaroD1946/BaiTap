@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 50)
                </h4>
                <a href="{{ route('sales_products.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('sales_products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã hàng <span class="text-danger">*</span></label>
        <input type="text" name="product_code" value="{{ old('product_code', $item->product_code ?? '') }}" class="form-control" placeholder="Nhập mã hàng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên mặt hàng kinh doanh <span class="text-danger">*</span></label>
        <input type="text" name="name" value="{{ old('name', $item->name ?? '') }}" class="form-control" placeholder="Nhập tên mặt hàng kinh doanh...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngành hàng <span class="text-danger">*</span></label>
        <select name="category" class="form-select">
            <option value="">-- Chọn Ngành hàng --</option>
                    <option value="Thời trang & Làm đẹp" {{ (old('category', $item->category ?? '') == 'Thời trang & Làm đẹp') ? 'selected' : '' }}>Thời trang & Làm đẹp</option>
                    <option value="Đồ điện tử công nghệ" {{ (old('category', $item->category ?? '') == 'Đồ điện tử công nghệ') ? 'selected' : '' }}>Đồ điện tử công nghệ</option>
                    <option value="Nhà cửa & Đời sống" {{ (old('category', $item->category ?? '') == 'Nhà cửa & Đời sống') ? 'selected' : '' }}>Nhà cửa & Đời sống</option>
                    <option value="Bách hóa online" {{ (old('category', $item->category ?? '') == 'Bách hóa online') ? 'selected' : '' }}>Bách hóa online</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Giá bán (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="price" value="{{ old('price', $item->price ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tồn kho thực tế <span class="text-danger">*</span></label>
        <input type="number" step="any" name="stock" value="{{ old('stock', $item->stock ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tình trạng kinh doanh <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Tình trạng kinh doanh --</option>
                    <option value="Đang kinh doanh" {{ (old('status', $item->status ?? '') == 'Đang kinh doanh') ? 'selected' : '' }}>Đang kinh doanh</option>
                    <option value="Hết hàng tạm thời" {{ (old('status', $item->status ?? '') == 'Hết hàng tạm thời') ? 'selected' : '' }}>Hết hàng tạm thời</option>
                    <option value="Ngừng kinh doanh" {{ (old('status', $item->status ?? '') == 'Ngừng kinh doanh') ? 'selected' : '' }}>Ngừng kinh doanh</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('sales_products.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
