@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 21)
                </h4>
                <a href="{{ route('collaborator_posts.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('collaborator_posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tiêu đề tin tuyển CTV <span class="text-danger">*</span></label>
        <input type="text" name="title" value="{{ old('title', $item->title ?? '') }}" class="form-control" placeholder="Nhập tiêu đề tin tuyển ctv...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Vị trí CTV <span class="text-danger">*</span></label>
        <select name="position" class="form-select">
            <option value="">-- Chọn Vị trí CTV --</option>
                    <option value="Viết bài Content" {{ (old('position', $item->position ?? '') == 'Viết bài Content') ? 'selected' : '' }}>Viết bài Content</option>
                    <option value="Thiết kế đồ họa" {{ (old('position', $item->position ?? '') == 'Thiết kế đồ họa') ? 'selected' : '' }}>Thiết kế đồ họa</option>
                    <option value="Dịch thuật" {{ (old('position', $item->position ?? '') == 'Dịch thuật') ? 'selected' : '' }}>Dịch thuật</option>
                    <option value="Hỗ trợ khách hàng" {{ (old('position', $item->position ?? '') == 'Hỗ trợ khách hàng') ? 'selected' : '' }}>Hỗ trợ khách hàng</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mức thù lao / sản phẩm <span class="text-danger">*</span></label>
        <input type="text" name="compensation" value="{{ old('compensation', $item->compensation ?? '') }}" class="form-control" placeholder="Nhập mức thù lao / sản phẩm...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Hạn ứng tuyển <span class="text-danger">*</span></label>
        <input type="date" name="deadline" value="{{ old('deadline', $item->deadline ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái --</option>
                    <option value="Đang tuyển" {{ (old('status', $item->status ?? '') == 'Đang tuyển') ? 'selected' : '' }}>Đang tuyển</option>
                    <option value="Tạm dừng" {{ (old('status', $item->status ?? '') == 'Tạm dừng') ? 'selected' : '' }}>Tạm dừng</option>
                    <option value="Đã kết thúc" {{ (old('status', $item->status ?? '') == 'Đã kết thúc') ? 'selected' : '' }}>Đã kết thúc</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Mô tả công việc <span class="text-danger">*</span></label>
        <textarea name="details" rows="3" class="form-control" placeholder="Nhập mô tả công việc...">{{ old('details', $item->details ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string|min:10</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('collaborator_posts.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
