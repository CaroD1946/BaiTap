@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{ $item->id }} (Đề Số 42)
                </h4>
                <a href="{{ route('members.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{ route('members.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Mã thẻ thành viên <span class="text-danger">*</span></label>
        <input type="text" name="member_code" value="{{ old('member_code', $item->member_code ?? '') }}" class="form-control" placeholder="Nhập mã thẻ thành viên...">
        <div class="form-text small">Quy tắc: <code>required|string|max:30</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Họ và tên thành viên <span class="text-danger">*</span></label>
        <input type="text" name="fullname" value="{{ old('fullname', $item->fullname ?? '') }}" class="form-control" placeholder="Nhập họ và tên thành viên...">
        <div class="form-text small">Quy tắc: <code>required|string|max:100</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Email <span class="text-danger">*</span></label>
        <input type="email" name="email" value="{{ old('email', $item->email ?? '') }}" class="form-control" placeholder="user@example.com">
        <div class="form-text small">Quy tắc: <code>required|email</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Hạng thành viên <span class="text-danger">*</span></label>
        <select name="member_tier" class="form-select">
            <option value="">-- Chọn Hạng thành viên --</option>
                    <option value="Thành viên Chuẩn" {{ (old('member_tier', $item->member_tier ?? '') == 'Thành viên Chuẩn') ? 'selected' : '' }}>Thành viên Chuẩn</option>
                    <option value="Bạc (Silver)" {{ (old('member_tier', $item->member_tier ?? '') == 'Bạc (Silver)') ? 'selected' : '' }}>Bạc (Silver)</option>
                    <option value="Vàng (Gold)" {{ (old('member_tier', $item->member_tier ?? '') == 'Vàng (Gold)') ? 'selected' : '' }}>Vàng (Gold)</option>
                    <option value="Bạch Kim (Platinum)" {{ (old('member_tier', $item->member_tier ?? '') == 'Bạch Kim (Platinum)') ? 'selected' : '' }}>Bạch Kim (Platinum)</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Ngày gia nhập <span class="text-danger">*</span></label>
        <input type="date" name="join_date" value="{{ old('join_date', $item->join_date ?? date('Y-m-d')) }}" class="form-control">
        <div class="form-text small">Quy tắc: <code>required|date</code></div>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold small text-dark">Trạng thái <span class="text-danger">*</span></label>
        <select name="status" class="form-select">
            <option value="">-- Chọn Trạng thái --</option>
                    <option value="Đang hoạt động" {{ (old('status', $item->status ?? '') == 'Đang hoạt động') ? 'selected' : '' }}>Đang hoạt động</option>
                    <option value="Hết hạn" {{ (old('status', $item->status ?? '') == 'Hết hạn') ? 'selected' : '' }}>Hết hạn</option>
                    <option value="Tạm khóa" {{ (old('status', $item->status ?? '') == 'Tạm khóa') ? 'selected' : '' }}>Tạm khóa</option>
        </select>
        <div class="form-text small">Quy tắc: <code>required|string</code></div>
    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{ route('members.index') }}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
