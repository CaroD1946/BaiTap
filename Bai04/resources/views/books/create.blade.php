@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 04)
                </h4>
                <a href="{{ route('books.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã sách <span class="text-danger">*</span></label>
        <input type="text" name="book_code" value="{{ old('book_code', $item->book_code ?? '') }}" class="form-control" placeholder="Nhập mã sách...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên sách <span class="text-danger">*</span></label>
        <input type="text" name="title" value="{{ old('title', $item->title ?? '') }}" class="form-control" placeholder="Nhập tên sách...">
        <div class="form-text small">Quy tắc: <code>required|string|min:2|max:200</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tác giả <span class="text-danger">*</span></label>
        <input type="text" name="author" value="{{ old('author', $item->author ?? '') }}" class="form-control" placeholder="Nhập tác giả...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Nhà xuất bản </label>
        <input type="text" name="publisher" value="{{ old('publisher', $item->publisher ?? '') }}" class="form-control" placeholder="Nhập nhà xuất bản...">
        <div class="form-text small">Quy tắc: <code>nullable|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Năm xuất bản <span class="text-danger">*</span></label>
        <input type="number" step="any" name="publish_year" value="{{ old('publish_year', $item->publish_year ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:1900|max:2026</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Số lượng sách <span class="text-danger">*</span></label>
        <input type="number" step="any" name="quantity" value="{{ old('quantity', $item->quantity ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:0</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('books.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
