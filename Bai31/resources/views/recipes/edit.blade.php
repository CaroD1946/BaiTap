@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 31)
                </h4>
                <a href="{{ route('recipes.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('recipes.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên món ăn / Công thức <span class="text-danger">*</span></label>
        <input type="text" name="recipe_name" value="{{ old('recipe_name', $item->recipe_name ?? '') }}" class="form-control" placeholder="Nhập tên món ăn / công thức...">
        <div class="form-text small">Quy tắc: <code>required|string|max:150</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ẩm thực <span class="text-danger">*</span></label>
        <select name="cuisine_type" class="form-select">
            <option value="">-- Chọn Ẩm thực --</option>
                    <option value="Món Việt" {{ (old('cuisine_type', $item->cuisine_type ?? '') == 'Món Việt') ? 'selected' : '' }}>Món Việt</option>
                    <option value="Món Á" {{ (old('cuisine_type', $item->cuisine_type ?? '') == 'Món Á') ? 'selected' : '' }}>Món Á</option>
                    <option value="Món Âu" {{ (old('cuisine_type', $item->cuisine_type ?? '') == 'Món Âu') ? 'selected' : '' }}>Món Âu</option>
                    <option value="Món Chay" {{ (old('cuisine_type', $item->cuisine_type ?? '') == 'Món Chay') ? 'selected' : '' }}>Món Chay</option>
                    <option value="Làm Bánh" {{ (old('cuisine_type', $item->cuisine_type ?? '') == 'Làm Bánh') ? 'selected' : '' }}>Làm Bánh</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Thời gian nấu (phút) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="cooking_time_minutes" value="{{ old('cooking_time_minutes', $item->cooking_time_minutes ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|integer|min:1</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Độ khó <span class="text-danger">*</span></label>
        <select name="difficulty" class="form-select">
            <option value="">-- Chọn Độ khó --</option>
                    <option value="Dễ làm" {{ (old('difficulty', $item->difficulty ?? '') == 'Dễ làm') ? 'selected' : '' }}>Dễ làm</option>
                    <option value="Trung bình" {{ (old('difficulty', $item->difficulty ?? '') == 'Trung bình') ? 'selected' : '' }}>Trung bình</option>
                    <option value="Khó" {{ (old('difficulty', $item->difficulty ?? '') == 'Khó') ? 'selected' : '' }}>Khó</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Nguyên liệu chính <span class="text-danger">*</span></label>
        <textarea name="ingredients" rows="3" class="form-control" placeholder="Nhập nguyên liệu chính...">{{ old('ingredients', $item->ingredients ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Các bước thực hiện <span class="text-danger">*</span></label>
        <textarea name="instructions" rows="3" class="form-control" placeholder="Nhập các bước thực hiện...">{{ old('instructions', $item->instructions ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string|min:10</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('recipes.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
