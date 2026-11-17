@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 46)
                </h4>
                <a href="{{ route('forum_posts.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('forum_posts.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tiêu đề thảo luận <span class="text-danger">*</span></label>
        <input type="text" name="title" value="{{ old('title', $item->title ?? '') }}" class="form-control" placeholder="Nhập tiêu đề thảo luận...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Chuyên mục diễn đàn <span class="text-danger">*</span></label>
        <select name="category" class="form-select">
            <option value="">-- Chọn Chuyên mục diễn đàn --</option>
                    <option value="Hỏi đáp Lập trình" {{ (old('category', $item->category ?? '') == 'Hỏi đáp Lập trình') ? 'selected' : '' }}>Hỏi đáp Lập trình</option>
                    <option value="Chia sẻ tài liệu" {{ (old('category', $item->category ?? '') == 'Chia sẻ tài liệu') ? 'selected' : '' }}>Chia sẻ tài liệu</option>
                    <option value="Góc tuyển dụng" {{ (old('category', $item->category ?? '') == 'Góc tuyển dụng') ? 'selected' : '' }}>Góc tuyển dụng</option>
                    <option value="Trò chuyện chung" {{ (old('category', $item->category ?? '') == 'Trò chuyện chung') ? 'selected' : '' }}>Trò chuyện chung</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tác giả bài đăng <span class="text-danger">*</span></label>
        <input type="text" name="author_name" value="{{ old('author_name', $item->author_name ?? '') }}" class="form-control" placeholder="Nhập tác giả bài đăng...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Nội dung bài viết <span class="text-danger">*</span></label>
        <textarea name="content" rows="3" class="form-control" placeholder="Nhập nội dung bài viết...">{{ old('content', $item->content ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string|min:10</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái duyệt <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái duyệt --</option>
                    <option value="Đã hiển thị" {{ (old('status', $item->status ?? '') == 'Đã hiển thị') ? 'selected' : '' }}>Đã hiển thị</option>
                    <option value="Chờ kiểm duyệt" {{ (old('status', $item->status ?? '') == 'Chờ kiểm duyệt') ? 'selected' : '' }}>Chờ kiểm duyệt</option>
                    <option value="Khóa bình luận" {{ (old('status', $item->status ?? '') == 'Khóa bình luận') ? 'selected' : '' }}>Khóa bình luận</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('forum_posts.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
