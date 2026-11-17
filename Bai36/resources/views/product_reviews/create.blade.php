@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 36)
                </h4>
                <a href="{{ route('product_reviews.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('product_reviews.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên sản phẩm đánh giá <span class="text-danger">*</span></label>
        <input type="text" name="product_name" value="{{ old('product_name', $item->product_name ?? '') }}" class="form-control" placeholder="Nhập tên sản phẩm đánh giá...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Người đánh giá <span class="text-danger">*</span></label>
        <input type="text" name="reviewer_name" value="{{ old('reviewer_name', $item->reviewer_name ?? '') }}" class="form-control" placeholder="Nhập người đánh giá...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số sao đánh giá <span class="text-danger">*</span></label>
        <select name="rating_stars" class="form-select">
            <option value="">-- Chọn Số sao đánh giá --</option>
                    <option value="1 Sao (Rất tệ)" {{ (old('rating_stars', $item->rating_stars ?? '') == '1 Sao (Rất tệ)') ? 'selected' : '' }}>1 Sao (Rất tệ)</option>
                    <option value="2 Sao (Tạm ổn)" {{ (old('rating_stars', $item->rating_stars ?? '') == '2 Sao (Tạm ổn)') ? 'selected' : '' }}>2 Sao (Tạm ổn)</option>
                    <option value="3 Sao (Bình thường)" {{ (old('rating_stars', $item->rating_stars ?? '') == '3 Sao (Bình thường)') ? 'selected' : '' }}>3 Sao (Bình thường)</option>
                    <option value="4 Sao (Hài lòng)" {{ (old('rating_stars', $item->rating_stars ?? '') == '4 Sao (Hài lòng)') ? 'selected' : '' }}>4 Sao (Hài lòng)</option>
                    <option value="5 Sao (Xuất sắc)" {{ (old('rating_stars', $item->rating_stars ?? '') == '5 Sao (Xuất sắc)') ? 'selected' : '' }}>5 Sao (Xuất sắc)</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Nhận xét chi tiết <span class="text-danger">*</span></label>
        <textarea name="comment" rows="3" class="form-control" placeholder="Nhập nhận xét chi tiết...">{{ old('comment', $item->comment ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string|min:5</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái kiểm duyệt <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái kiểm duyệt --</option>
                    <option value="Chờ duyệt" {{ (old('status', $item->status ?? '') == 'Chờ duyệt') ? 'selected' : '' }}>Chờ duyệt</option>
                    <option value="Đã duyệt hiển thị" {{ (old('status', $item->status ?? '') == 'Đã duyệt hiển thị') ? 'selected' : '' }}>Đã duyệt hiển thị</option>
                    <option value="Đã ẩn do vi phạm" {{ (old('status', $item->status ?? '') == 'Đã ẩn do vi phạm') ? 'selected' : '' }}>Đã ẩn do vi phạm</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('product_reviews.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
