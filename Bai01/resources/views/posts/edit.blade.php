@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 01)
                </h4>
                <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('posts.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tiêu đề bài viết <span class="text-danger">*</span></label>
        <input type="text" name="title" value="{{ old('title', $item->title ?? '') }}" class="form-control" placeholder="Nhập tiêu đề bài viết...">
        <div class="form-text small">Quy tắc: <code>required|string|min:5|max:255</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Chuyên mục <span class="text-danger">*</span></label>
        <select name="category" class="form-select">
            <option value="">-- Chọn Chuyên mục --</option>
                    <option value="Thời sự" {{ (old('category', $item->category ?? '') == 'Thời sự') ? 'selected' : '' }}>Thời sự</option>
                    <option value="Công nghệ" {{ (old('category', $item->category ?? '') == 'Công nghệ') ? 'selected' : '' }}>Công nghệ</option>
                    <option value="Kinh tế" {{ (old('category', $item->category ?? '') == 'Kinh tế') ? 'selected' : '' }}>Kinh tế</option>
                    <option value="Thể thao" {{ (old('category', $item->category ?? '') == 'Thể thao') ? 'selected' : '' }}>Thể thao</option>
                    <option value="Giải trí" {{ (old('category', $item->category ?? '') == 'Giải trí') ? 'selected' : '' }}>Giải trí</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tác giả <span class="text-danger">*</span></label>
        <input type="text" name="author" value="{{ old('author', $item->author ?? '') }}" class="form-control" placeholder="Nhập tác giả...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Nội dung bài viết <span class="text-danger">*</span></label>
        <textarea name="content" rows="3" class="form-control" placeholder="Nhập nội dung bài viết...">{{ old('content', $item->content ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string|min:10</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái --</option>
                    <option value="Bản nháp" {{ (old('status', $item->status ?? '') == 'Bản nháp') ? 'selected' : '' }}>Bản nháp</option>
                    <option value="Đã xuất bản" {{ (old('status', $item->status ?? '') == 'Đã xuất bản') ? 'selected' : '' }}>Đã xuất bản</option>
                    <option value="Chờ duyệt" {{ (old('status', $item->status ?? '') == 'Chờ duyệt') ? 'selected' : '' }}>Chờ duyệt</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày đăng </label>
        <input type="date" name="published_at" value="{{ old('published_at', $item->published_at ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>nullable|date</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('posts.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
