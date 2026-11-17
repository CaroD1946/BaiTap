@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 25)
                </h4>
                <a href="{{ route('support_tickets.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('support_tickets.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã yêu cầu hỗ trợ <span class="text-danger">*</span></label>
        <input type="text" name="ticket_code" value="{{ old('ticket_code', $item->ticket_code ?? '') }}" class="form-control" placeholder="Nhập mã yêu cầu hỗ trợ...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Người yêu cầu <span class="text-danger">*</span></label>
        <input type="text" name="requester_name" value="{{ old('requester_name', $item->requester_name ?? '') }}" class="form-control" placeholder="Nhập người yêu cầu...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Loại sự cố <span class="text-danger">*</span></label>
        <select name="issue_type" class="form-select">
            <option value="">-- Chọn Loại sự cố --</option>
                    <option value="Sự cố phần mềm" {{ (old('issue_type', $item->issue_type ?? '') == 'Sự cố phần mềm') ? 'selected' : '' }}>Sự cố phần mềm</option>
                    <option value="Hỏng phần cứng" {{ (old('issue_type', $item->issue_type ?? '') == 'Hỏng phần cứng') ? 'selected' : '' }}>Hỏng phần cứng</option>
                    <option value="Mất kết nối mạng" {{ (old('issue_type', $item->issue_type ?? '') == 'Mất kết nối mạng') ? 'selected' : '' }}>Mất kết nối mạng</option>
                    <option value="Cấp quyền truy cập" {{ (old('issue_type', $item->issue_type ?? '') == 'Cấp quyền truy cập') ? 'selected' : '' }}>Cấp quyền truy cập</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Độ khẩn cấp <span class="text-danger">*</span></label>
        <select name="priority" class="form-select">
            <option value="">-- Chọn Độ khẩn cấp --</option>
                    <option value="Thấp" {{ (old('priority', $item->priority ?? '') == 'Thấp') ? 'selected' : '' }}>Thấp</option>
                    <option value="Trung bình" {{ (old('priority', $item->priority ?? '') == 'Trung bình') ? 'selected' : '' }}>Trung bình</option>
                    <option value="Cao" {{ (old('priority', $item->priority ?? '') == 'Cao') ? 'selected' : '' }}>Cao</option>
                    <option value="Khẩn cấp" {{ (old('priority', $item->priority ?? '') == 'Khẩn cấp') ? 'selected' : '' }}>Khẩn cấp</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Tiến độ xử lý <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Tiến độ xử lý --</option>
                    <option value="Mới tiếp nhận" {{ (old('status', $item->status ?? '') == 'Mới tiếp nhận') ? 'selected' : '' }}>Mới tiếp nhận</option>
                    <option value="Đang xử lý" {{ (old('status', $item->status ?? '') == 'Đang xử lý') ? 'selected' : '' }}>Đang xử lý</option>
                    <option value="Chờ phản hồi" {{ (old('status', $item->status ?? '') == 'Chờ phản hồi') ? 'selected' : '' }}>Chờ phản hồi</option>
                    <option value="Đã giải quyết" {{ (old('status', $item->status ?? '') == 'Đã giải quyết') ? 'selected' : '' }}>Đã giải quyết</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-12">
        <label class="form-label fw-bold small text-dark">Chi tiết sự cố <span class="text-danger">*</span></label>
        <textarea name="description" rows="3" class="form-control" placeholder="Nhập chi tiết sự cố...">{{ old('description', $item->description ?? '') }}</textarea>
        <div class="form-text small">Quy tắc: <code>required|string|min:5</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('support_tickets.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
