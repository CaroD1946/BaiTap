@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 45)
                </h4>
                <a href="{{ route('assets.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('assets.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã tài sản cố định <span class="text-danger">*</span></label>
        <input type="text" name="asset_code" value="{{ old('asset_code', $item->asset_code ?? '') }}" class="form-control" placeholder="Nhập mã tài sản cố định...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên tài sản <span class="text-danger">*</span></label>
        <input type="text" name="asset_name" value="{{ old('asset_name', $item->asset_name ?? '') }}" class="form-control" placeholder="Nhập tên tài sản...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Bộ phận quản lý / sử dụng <span class="text-danger">*</span></label>
        <select name="department" class="form-select">
            <option value="">-- Chọn Bộ phận quản lý / sử dụng --</option>
                    <option value="Ban Giám Đốc" {{ (old('department', $item->department ?? '') == 'Ban Giám Đốc') ? 'selected' : '' }}>Ban Giám Đốc</option>
                    <option value="Phòng Kỹ Thuật" {{ (old('department', $item->department ?? '') == 'Phòng Kỹ Thuật') ? 'selected' : '' }}>Phòng Kỹ Thuật</option>
                    <option value="Phòng Kế Toán" {{ (old('department', $item->department ?? '') == 'Phòng Kế Toán') ? 'selected' : '' }}>Phòng Kế Toán</option>
                    <option value="Phòng Hành Chính" {{ (old('department', $item->department ?? '') == 'Phòng Hành Chính') ? 'selected' : '' }}>Phòng Hành Chính</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày mua <span class="text-danger">*</span></label>
        <input type="date" name="purchase_date" value="{{ old('purchase_date', $item->purchase_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Nguyên giá sổ sách (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="original_value" value="{{ old('original_value', $item->original_value ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Hiện trạng tài sản <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Hiện trạng tài sản --</option>
                    <option value="Đang sử dụng tốt" {{ (old('status', $item->status ?? '') == 'Đang sử dụng tốt') ? 'selected' : '' }}>Đang sử dụng tốt</option>
                    <option value="Cần bảo trì" {{ (old('status', $item->status ?? '') == 'Cần bảo trì') ? 'selected' : '' }}>Cần bảo trì</option>
                    <option value="Chờ sửa chữa" {{ (old('status', $item->status ?? '') == 'Chờ sửa chữa') ? 'selected' : '' }}>Chờ sửa chữa</option>
                    <option value="Đã hết khấu hao" {{ (old('status', $item->status ?? '') == 'Đã hết khấu hao') ? 'selected' : '' }}>Đã hết khấu hao</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('assets.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
