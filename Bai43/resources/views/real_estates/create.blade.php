@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 43)
                </h4>
                <a href="{{ route('real_estates.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('real_estates.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tiêu đề tin bất động sản <span class="text-danger">*</span></label>
        <input type="text" name="title" value="{{ old('title', $item->title ?? '') }}" class="form-control" placeholder="Nhập tiêu đề tin bất động sản...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Loại hình BĐS <span class="text-danger">*</span></label>
        <select name="property_type" class="form-select">
            <option value="">-- Chọn Loại hình BĐS --</option>
                    <option value="Căn hộ chung cư" {{ (old('property_type', $item->property_type ?? '') == 'Căn hộ chung cư') ? 'selected' : '' }}>Căn hộ chung cư</option>
                    <option value="Nhà phố liền kề" {{ (old('property_type', $item->property_type ?? '') == 'Nhà phố liền kề') ? 'selected' : '' }}>Nhà phố liền kề</option>
                    <option value="Biệt thự cao cấp" {{ (old('property_type', $item->property_type ?? '') == 'Biệt thự cao cấp') ? 'selected' : '' }}>Biệt thự cao cấp</option>
                    <option value="Đất nền dự án" {{ (old('property_type', $item->property_type ?? '') == 'Đất nền dự án') ? 'selected' : '' }}>Đất nền dự án</option>
                    <option value="Mặt bằng kinh doanh" {{ (old('property_type', $item->property_type ?? '') == 'Mặt bằng kinh doanh') ? 'selected' : '' }}>Mặt bằng kinh doanh</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Vị trí / Địa chỉ <span class="text-danger">*</span></label>
        <input type="text" name="address" value="{{ old('address', $item->address ?? '') }}" class="form-control" placeholder="Nhập vị trí / địa chỉ...">
        <div class="form-text small">Quy tắc: <code>required|string|max:255</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Diện tích (m²) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="area_m2" value="{{ old('area_m2', $item->area_m2 ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:10</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Giá bán (Tỷ VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="price_billion" value="{{ old('price_billion', $item->price_billion ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0.1</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tình trạng giao dịch <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Tình trạng giao dịch --</option>
                    <option value="Đang mở bán" {{ (old('status', $item->status ?? '') == 'Đang mở bán') ? 'selected' : '' }}>Đang mở bán</option>
                    <option value="Đã nhận cọc" {{ (old('status', $item->status ?? '') == 'Đã nhận cọc') ? 'selected' : '' }}>Đã nhận cọc</option>
                    <option value="Đã giao dịch thành công" {{ (old('status', $item->status ?? '') == 'Đã giao dịch thành công') ? 'selected' : '' }}>Đã giao dịch thành công</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('real_estates.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
