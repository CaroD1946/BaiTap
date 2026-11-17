@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 30)
                </h4>
                <a href="{{ route('workshops.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('workshops.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên hội thảo / Chuyên đề <span class="text-danger">*</span></label>
        <input type="text" name="workshop_name" value="{{ old('workshop_name', $item->workshop_name ?? '') }}" class="form-control" placeholder="Nhập tên hội thảo / chuyên đề...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Diễn giả chính <span class="text-danger">*</span></label>
        <input type="text" name="speaker" value="{{ old('speaker', $item->speaker ?? '') }}" class="form-control" placeholder="Nhập diễn giả chính...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày tổ chức <span class="text-danger">*</span></label>
        <input type="date" name="event_date" value="{{ old('event_date', $item->event_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Phí tham dự (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="fee" value="{{ old('fee', $item->fee ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái đăng ký <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái đăng ký --</option>
                    <option value="Mở đăng ký" {{ (old('status', $item->status ?? '') == 'Mở đăng ký') ? 'selected' : '' }}>Mở đăng ký</option>
                    <option value="Sắp hết chỗ" {{ (old('status', $item->status ?? '') == 'Sắp hết chỗ') ? 'selected' : '' }}>Sắp hết chỗ</option>
                    <option value="Đã đủ người" {{ (old('status', $item->status ?? '') == 'Đã đủ người') ? 'selected' : '' }}>Đã đủ người</option>
                    <option value="Đã kết thúc" {{ (old('status', $item->status ?? '') == 'Đã kết thúc') ? 'selected' : '' }}>Đã kết thúc</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Nội dung chương trình </label>
        <textarea name="description" rows="3" class="form-control" placeholder="Nhập nội dung chương trình...">{{ old('description', $item->description ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('workshops.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
