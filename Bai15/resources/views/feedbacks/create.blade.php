@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 15)
                </h4>
                <a href="{{ route('feedbacks.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('feedbacks.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Họ và tên khách hàng <span class="text-danger">*</span></label>
        <input type="text" name="fullname" value="{{ old('fullname', $item->fullname ?? '') }}" class="form-control" placeholder="Nhập họ và tên khách hàng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Email liên lạc <span class="text-danger">*</span></label>
        <input type="email" name="email" value="{{ old('email', $item->email ?? '') }}" class="form-control" placeholder="user@example.com">
        <div class="form-text small">Quy tắc: <code>required|email</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Chủ đề phản hồi <span class="text-danger">*</span></label>
        <input type="text" name="subject" value="{{ old('subject', $item->subject ?? '') }}" class="form-control" placeholder="Nhập chủ đề phản hồi...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Đánh giá sao <span class="text-danger">*</span></label>
        <select name="rating" class="form-select">
            <option value="">-- Chọn Đánh giá sao --</option>
                    <option value="1 Sao" {{ (old('rating', $item->rating ?? '') == '1 Sao') ? 'selected' : '' }}>1 Sao</option>
                    <option value="2 Sao" {{ (old('rating', $item->rating ?? '') == '2 Sao') ? 'selected' : '' }}>2 Sao</option>
                    <option value="3 Sao" {{ (old('rating', $item->rating ?? '') == '3 Sao') ? 'selected' : '' }}>3 Sao</option>
                    <option value="4 Sao" {{ (old('rating', $item->rating ?? '') == '4 Sao') ? 'selected' : '' }}>4 Sao</option>
                    <option value="5 Sao" {{ (old('rating', $item->rating ?? '') == '5 Sao') ? 'selected' : '' }}>5 Sao</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái xử lý <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái xử lý --</option>
                    <option value="Chờ tiếp nhận" {{ (old('status', $item->status ?? '') == 'Chờ tiếp nhận') ? 'selected' : '' }}>Chờ tiếp nhận</option>
                    <option value="Đang xử lý" {{ (old('status', $item->status ?? '') == 'Đang xử lý') ? 'selected' : '' }}>Đang xử lý</option>
                    <option value="Đã phản hồi" {{ (old('status', $item->status ?? '') == 'Đã phản hồi') ? 'selected' : '' }}>Đã phản hồi</option>
                    <option value="Đã đóng" {{ (old('status', $item->status ?? '') == 'Đã đóng') ? 'selected' : '' }}>Đã đóng</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Nội dung phản hồi <span class="text-danger">*</span></label>
        <textarea name="content" rows="3" class="form-control" placeholder="Nhập nội dung phản hồi...">{{ old('content', $item->content ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string|min:5</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('feedbacks.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
