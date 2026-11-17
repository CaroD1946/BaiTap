@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 37)
                </h4>
                <a href="{{ route('promotions.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã khuyến mãi (Voucher) <span class="text-danger">*</span></label>
        <input type="text" name="promo_code" value="{{ old('promo_code', $item->promo_code ?? '') }}" class="form-control" placeholder="Nhập mã khuyến mãi (voucher)...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên chương trình <span class="text-danger">*</span></label>
        <input type="text" name="promo_name" value="{{ old('promo_name', $item->promo_name ?? '') }}" class="form-control" placeholder="Nhập tên chương trình...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Phần trăm giảm (%) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="discount_percent" value="{{ old('discount_percent', $item->discount_percent ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|between:1,100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày bắt đầu áp dụng <span class="text-danger">*</span></label>
        <input type="date" name="start_date" value="{{ old('start_date', $item->start_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày kết thúc <span class="text-danger">*</span></label>
        <input type="date" name="end_date" value="{{ old('end_date', $item->end_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Hiệu lực <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Hiệu lực --</option>
                    <option value="Đang kích hoạt" {{ (old('status', $item->status ?? '') == 'Đang kích hoạt') ? 'selected' : '' }}>Đang kích hoạt</option>
                    <option value="Sắp diễn ra" {{ (old('status', $item->status ?? '') == 'Sắp diễn ra') ? 'selected' : '' }}>Sắp diễn ra</option>
                    <option value="Đã hết hạn" {{ (old('status', $item->status ?? '') == 'Đã hết hạn') ? 'selected' : '' }}>Đã hết hạn</option>
                    <option value="Tạm khóa" {{ (old('status', $item->status ?? '') == 'Tạm khóa') ? 'selected' : '' }}>Tạm khóa</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('promotions.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
