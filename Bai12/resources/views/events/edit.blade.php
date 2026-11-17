@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 12)
                </h4>
                <a href="{{ route('events.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('events.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên sự kiện <span class="text-danger">*</span></label>
        <input type="text" name="event_name" value="{{ old('event_name', $item->event_name ?? '') }}" class="form-control" placeholder="Nhập tên sự kiện...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Địa điểm tổ chức <span class="text-danger">*</span></label>
        <input type="text" name="location" value="{{ old('location', $item->location ?? '') }}" class="form-control" placeholder="Nhập địa điểm tổ chức...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Thời gian diễn ra <span class="text-danger">*</span></label>
        <input type="date" name="event_date" value="{{ old('event_date', $item->event_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số lượng chỗ tối đa <span class="text-danger">*</span></label>
        <input type="number" step="any" name="capacity" value="{{ old('capacity', $item->capacity ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:1</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái --</option>
                    <option value="Sắp diễn ra" {{ (old('status', $item->status ?? '') == 'Sắp diễn ra') ? 'selected' : '' }}>Sắp diễn ra</option>
                    <option value="Đang diễn ra" {{ (old('status', $item->status ?? '') == 'Đang diễn ra') ? 'selected' : '' }}>Đang diễn ra</option>
                    <option value="Đã kết thúc" {{ (old('status', $item->status ?? '') == 'Đã kết thúc') ? 'selected' : '' }}>Đã kết thúc</option>
                    <option value="Đã hủy" {{ (old('status', $item->status ?? '') == 'Đã hủy') ? 'selected' : '' }}>Đã hủy</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Mô tả sự kiện </label>
        <textarea name="description" rows="3" class="form-control" placeholder="Nhập mô tả sự kiện...">{{ old('description', $item->description ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('events.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
