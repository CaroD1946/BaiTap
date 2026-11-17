@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số 48)
                </h4>
                <a href="{{ route('research_topics.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('research_topics.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã đề tài nghiên cứu <span class="text-danger">*</span></label>
        <input type="text" name="topic_code" value="{{ old('topic_code', $item->topic_code ?? '') }}" class="form-control" placeholder="Nhập mã đề tài nghiên cứu...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tên đề tài khoa học <span class="text-danger">*</span></label>
        <input type="text" name="topic_name" value="{{ old('topic_name', $item->topic_name ?? '') }}" class="form-control" placeholder="Nhập tên đề tài khoa học...">
        <div class="form-text small">Quy tắc: <code>required|string|max:255</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Chủ nhiệm đề tài <span class="text-danger">*</span></label>
        <input type="text" name="supervisor" value="{{ old('supervisor', $item->supervisor ?? '') }}" class="form-control" placeholder="Nhập chủ nhiệm đề tài...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Lĩnh vực nghiên cứu <span class="text-danger">*</span></label>
        <select name="field" class="form-select">
            <option value="">-- Chọn Lĩnh vực nghiên cứu --</option>
                    <option value="Trí tuệ nhân tạo (AI)" {{ (old('field', $item->field ?? '') == 'Trí tuệ nhân tạo (AI)') ? 'selected' : '' }}>Trí tuệ nhân tạo (AI)</option>
                    <option value="An toàn thông tin" {{ (old('field', $item->field ?? '') == 'An toàn thông tin') ? 'selected' : '' }}>An toàn thông tin</option>
                    <option value="Dữ liệu lớn (Big Data)" {{ (old('field', $item->field ?? '') == 'Dữ liệu lớn (Big Data)') ? 'selected' : '' }}>Dữ liệu lớn (Big Data)</option>
                    <option value="Internet vạn vật (IoT)" {{ (old('field', $item->field ?? '') == 'Internet vạn vật (IoT)') ? 'selected' : '' }}>Internet vạn vật (IoT)</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Kinh phí nghiên cứu (VNĐ) <span class="text-danger">*</span></label>
        <input type="number" step="any" name="funding" value="{{ old('funding', $item->funding ?? '') }}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>required|numeric|min:0</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tiến độ nghiên cứu <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Tiến độ nghiên cứu --</option>
                    <option value="Đang đăng ký" {{ (old('status', $item->status ?? '') == 'Đang đăng ký') ? 'selected' : '' }}>Đang đăng ký</option>
                    <option value="Đang thực hiện" {{ (old('status', $item->status ?? '') == 'Đang thực hiện') ? 'selected' : '' }}>Đang thực hiện</option>
                    <option value="Nghiệm thu cấp cơ sở" {{ (old('status', $item->status ?? '') == 'Nghiệm thu cấp cơ sở') ? 'selected' : '' }}>Nghiệm thu cấp cơ sở</option>
                    <option value="Đã bảo vệ thành công" {{ (old('status', $item->status ?? '') == 'Đã bảo vệ thành công') ? 'selected' : '' }}>Đã bảo vệ thành công</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('research_topics.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
