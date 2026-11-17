@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 22)
                </h4>
                <a href="{{ route('documents.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã số tài liệu <span class="text-danger">*</span></label>
        <input type="text" name="doc_code" value="{{ old('doc_code', $item->doc_code ?? '') }}" class="form-control" placeholder="Nhập mã số tài liệu...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên tài liệu <span class="text-danger">*</span></label>
        <input type="text" name="title" value="{{ old('title', $item->title ?? '') }}" class="form-control" placeholder="Nhập tên tài liệu...">
        <div class="form-text small">Quy tắc: <code>required|string|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Danh mục tài liệu <span class="text-danger">*</span></label>
        <select name="category" class="form-select">
            <option value="">-- Chọn Danh mục tài liệu --</option>
                    <option value="Quy chế nội bộ" {{ (old('category', $item->category ?? '') == 'Quy chế nội bộ') ? 'selected' : '' }}>Quy chế nội bộ</option>
                    <option value="Tài liệu kỹ thuật" {{ (old('category', $item->category ?? '') == 'Tài liệu kỹ thuật') ? 'selected' : '' }}>Tài liệu kỹ thuật</option>
                    <option value="Báo cáo tài chính" {{ (old('category', $item->category ?? '') == 'Báo cáo tài chính') ? 'selected' : '' }}>Báo cáo tài chính</option>
                    <option value="Biểu mẫu hành chính" {{ (old('category', $item->category ?? '') == 'Biểu mẫu hành chính') ? 'selected' : '' }}>Biểu mẫu hành chính</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Người biên soạn <span class="text-danger">*</span></label>
        <input type="text" name="author" value="{{ old('author', $item->author ?? '') }}" class="form-control" placeholder="Nhập người biên soạn...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mức độ bảo mật <span class="text-danger">*</span></label>
        <select name="security_level" class="form-select">
            <option value="">-- Chọn Mức độ bảo mật --</option>
                    <option value="Công khai" {{ (old('security_level', $item->security_level ?? '') == 'Công khai') ? 'selected' : '' }}>Công khai</option>
                    <option value="Nội bộ công ty" {{ (old('security_level', $item->security_level ?? '') == 'Nội bộ công ty') ? 'selected' : '' }}>Nội bộ công ty</option>
                    <option value="Bảo mật cao" {{ (old('security_level', $item->security_level ?? '') == 'Bảo mật cao') ? 'selected' : '' }}>Bảo mật cao</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Tóm tắt tài liệu </label>
        <textarea name="summary" rows="3" class="form-control" placeholder="Nhập tóm tắt tài liệu...">{{ old('summary', $item->summary ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('documents.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
