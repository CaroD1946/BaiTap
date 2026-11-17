@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-info-circle-fill me-2"></i> Chi Tiết Bản Ghi #{{ $item->id }}
                </h4>
                <div class="d-flex gap-2">
                    <a href="{{ route('real_estates.edit', $item->id) }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-pencil me-1"></i> Sửa
                    </a>
                    <a href="{{ route('real_estates.index') }}" class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-arrow-left me-1"></i> Quay lại
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 200px;" class="bg-light">Mã định danh (ID):</th>
                        <td><span class="badge bg-secondary">#{{ $item->id }}</span></td>
                    </tr>
                    <tr>
                        <th style="width: 200px;" class="bg-light">Tiêu đề tin bất động sản:</th>
                        <td>{{ $item->title }}</td>
                    </tr>
                    <tr>
                        <th style="width: 200px;" class="bg-light">Loại hình BĐS:</th>
                        <td>{{ $item->property_type }}</td>
                    </tr>
                    <tr>
                        <th style="width: 200px;" class="bg-light">Vị trí / Địa chỉ:</th>
                        <td>{{ $item->address }}</td>
                    </tr>
                    <tr>
                        <th style="width: 200px;" class="bg-light">Diện tích (m²):</th>
                        <td>{{ $item->area_m2 }}</td>
                    </tr>
                    <tr>
                        <th style="width: 200px;" class="bg-light">Giá bán (Tỷ VNĐ):</th>
                        <td>{{ $item->price_billion }}</td>
                    </tr>
                    <tr>
                        <th style="width: 200px;" class="bg-light">Tình trạng giao dịch:</th>
                        <td>{{ $item->status }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">Thời gian tạo:</th>
                        <td class="text-muted">{{ $item->created_at }}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">Thời gian cập nhật:</th>
                        <td class="text-muted">{{ $item->updated_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
