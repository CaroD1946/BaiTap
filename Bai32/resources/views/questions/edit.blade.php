@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 32)
                </h4>
                <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('questions.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Chủ đề câu hỏi <span class="text-danger">*</span></label>
        <select name="topic" class="form-select">
            <option value="">-- Chọn Chủ đề câu hỏi --</option>
                    <option value="Lập trình Web" {{ (old('topic', $item->topic ?? '') == 'Lập trình Web') ? 'selected' : '' }}>Lập trình Web</option>
                    <option value="Cơ sở dữ liệu" {{ (old('topic', $item->topic ?? '') == 'Cơ sở dữ liệu') ? 'selected' : '' }}>Cơ sở dữ liệu</option>
                    <option value="Giải thuật" {{ (old('topic', $item->topic ?? '') == 'Giải thuật') ? 'selected' : '' }}>Giải thuật</option>
                    <option value="Mạng máy tính" {{ (old('topic', $item->topic ?? '') == 'Mạng máy tính') ? 'selected' : '' }}>Mạng máy tính</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Nội dung câu hỏi <span class="text-danger">*</span></label>
        <textarea name="question_text" rows="3" class="form-control" placeholder="Nhập nội dung câu hỏi...">{{ old('question_text', $item->question_text ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string|min:10</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mức độ <span class="text-danger">*</span></label>
        <select name="difficulty" class="form-select">
            <option value="">-- Chọn Mức độ --</option>
                    <option value="Dễ" {{ (old('difficulty', $item->difficulty ?? '') == 'Dễ') ? 'selected' : '' }}>Dễ</option>
                    <option value="Trung bình" {{ (old('difficulty', $item->difficulty ?? '') == 'Trung bình') ? 'selected' : '' }}>Trung bình</option>
                    <option value="Khó" {{ (old('difficulty', $item->difficulty ?? '') == 'Khó') ? 'selected' : '' }}>Khó</option>
                    <option value="Nâng cao" {{ (old('difficulty', $item->difficulty ?? '') == 'Nâng cao') ? 'selected' : '' }}>Nâng cao</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Đáp án chính xác <span class="text-danger">*</span></label>
        <select name="correct_answer" class="form-select">
            <option value="">-- Chọn Đáp án chính xác --</option>
                    <option value="Đáp án A" {{ (old('correct_answer', $item->correct_answer ?? '') == 'Đáp án A') ? 'selected' : '' }}>Đáp án A</option>
                    <option value="Đáp án B" {{ (old('correct_answer', $item->correct_answer ?? '') == 'Đáp án B') ? 'selected' : '' }}>Đáp án B</option>
                    <option value="Đáp án C" {{ (old('correct_answer', $item->correct_answer ?? '') == 'Đáp án C') ? 'selected' : '' }}>Đáp án C</option>
                    <option value="Đáp án D" {{ (old('correct_answer', $item->correct_answer ?? '') == 'Đáp án D') ? 'selected' : '' }}>Đáp án D</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Điểm số <span class="text-danger">*</span></label>
        <input type="number" step="any" name="points" value="{{ old('points', $item->points ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|between:0.5,10</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Giải thích chi tiết </label>
        <textarea name="explanation" rows="3" class="form-control" placeholder="Nhập giải thích chi tiết...">{{ old('explanation', $item->explanation ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>nullable|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('questions.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
