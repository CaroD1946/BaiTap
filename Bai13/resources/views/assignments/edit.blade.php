@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 13)
                </h4>
                <a href="{{ route('assignments.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('assignments.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tiêu đề bài tập <span class="text-danger">*</span></label>
        <input type="text" name="title" value="{{ old('title', $item->title ?? '') }}" class="form-control" placeholder="Nhập tiêu đề bài tập...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Môn học <span class="text-danger">*</span></label>
        <select name="course_name" class="form-select">
            <option value="">-- Chọn Môn học --</option>
                    <option value="Lập trình Web" {{ (old('course_name', $item->course_name ?? '') == 'Lập trình Web') ? 'selected' : '' }}>Lập trình Web</option>
                    <option value="Cơ sở dữ liệu" {{ (old('course_name', $item->course_name ?? '') == 'Cơ sở dữ liệu') ? 'selected' : '' }}>Cơ sở dữ liệu</option>
                    <option value="Cấu trúc dữ liệu" {{ (old('course_name', $item->course_name ?? '') == 'Cấu trúc dữ liệu') ? 'selected' : '' }}>Cấu trúc dữ liệu</option>
                    <option value="Mạng máy tính" {{ (old('course_name', $item->course_name ?? '') == 'Mạng máy tính') ? 'selected' : '' }}>Mạng máy tính</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Hạn chót nộp bài <span class="text-danger">*</span></label>
        <input type="date" name="deadline" value="{{ old('deadline', $item->deadline ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Điểm tối đa <span class="text-danger">*</span></label>
        <input type="number" step="any" name="max_score" value="{{ old('max_score', $item->max_score ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|between:1,10</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái --</option>
                    <option value="Đang mở" {{ (old('status', $item->status ?? '') == 'Đang mở') ? 'selected' : '' }}>Đang mở</option>
                    <option value="Đã đóng" {{ (old('status', $item->status ?? '') == 'Đã đóng') ? 'selected' : '' }}>Đã đóng</option>
                    <option value="Đã chấm điểm" {{ (old('status', $item->status ?? '') == 'Đã chấm điểm') ? 'selected' : '' }}>Đã chấm điểm</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Yêu cầu chi tiết bài tập <span class="text-danger">*</span></label>
        <textarea name="content" rows="3" class="form-control" placeholder="Nhập yêu cầu chi tiết bài tập...">{{ old('content', $item->content ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string|min:10</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('assignments.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
