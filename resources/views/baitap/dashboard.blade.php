@extends('baitap.layout')

@section('title', 'Bảng Điều Khiển Tổng Hợp - 50 Bài Tập Thực Hành Laravel')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="card card-custom p-4 bg-white border-0 shadow-sm">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                <div>
                    <h2 class="fw-bold text-primary mb-1">
                        <i class="bi bi-collection-play-fill me-2"></i> Hệ Thống Quản Lý 50 Bài Tập Thực Hành Laravel
                    </h2>
                    <p class="text-muted mb-0">
                        Mỗi bài tập được thiết kế độc lập theo chuẩn cấu trúc đề thi ôn tập thực hành: Có Controller riêng, Model riêng, và sử dụng <strong>Cơ sở dữ liệu riêng biệt trên MySQL / phpMyAdmin</strong>.
                    </p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <!-- Nút Khởi tạo 50 CSDL 1 Click -->
                    <form action="{{ route('dashboard.init_all') }}" method="POST" onsubmit="return confirm('Bạn có muốn tự động tạo và nạp dữ liệu mẫu cho toàn bộ 50 Cơ sở dữ liệu trong phpMyAdmin không?');">
                        @csrf
                        <button type="submit" class="btn btn-primary fw-bold shadow-sm">
                            <i class="bi bi-lightning-charge-fill me-1"></i> Khởi tạo tất cả 50 CSDL (1 Click)
                        </button>
                    </form>

                    <!-- Link phpMyAdmin -->
                    <a href="http://localhost/phpmyadmin/" target="_blank" class="btn btn-outline-secondary fw-bold shadow-sm">
                        <i class="bi bi-box-arrow-up-right me-1"></i> Xem trên phpMyAdmin
                    </a>
                </div>
            </div>

            <hr class="my-3 text-muted">

            <!-- Search bar & Filter -->
            <form action="{{ route('dashboard') }}" method="GET" class="row g-2 align-items-center">
                <div class="col-md-9 col-lg-10">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-search text-muted"></i>
                        </span>
                        <input type="text" name="q" value="{{ $keyword ?? '' }}" class="form-control border-start-0" 
                               placeholder="Tìm kiếm bài tập theo tên đề, mã bài, từ khóa (ví dụ: sản phẩm, sinh viên, đơn hàng, hóa đơn, 1, 25...)...">
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 d-flex gap-2">
                    <button type="submit" class="btn btn-dark w-100 fw-semibold">
                        <i class="bi bi-funnel me-1"></i> Lọc
                    </button>
                    @if(!empty($keyword))
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary" title="Xóa bộ lọc">
                            <i class="bi bi-x-lg"></i>
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Grid 50 Exercises -->
<div class="row g-3">
    @forelse($all as $ex)
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card card-custom h-100 bg-white">
                <div class="card-header bg-white border-0 pt-3 pb-0 d-flex justify-content-between align-items-center">
                    <span class="badge bg-primary fs-6 px-2 py-1">
                        ĐỀ SỐ {{ sprintf('%02d', $ex['num']) }}
                    </span>
                    <span class="badge-db" title="Cơ sở dữ liệu độc lập trong phpMyAdmin">
                        <i class="bi bi-database me-1"></i> {{ $ex['db_name'] }}
                    </span>
                </div>

                <div class="card-body">
                    <h5 class="card-title fw-bold text-dark mb-2">
                        <a href="{{ route('baitap.show_bai', ['id' => $ex['num']]) }}" class="text-decoration-none text-dark hover-primary">
                            {{ $ex['title'] }}
                        </a>
                    </h5>

                    <p class="card-text text-muted small mb-3" style="min-height: 48px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                        {{ $ex['desc'] ?: 'Hệ thống quản lý thông tin nghiệp vụ theo chuẩn 8 câu hỏi thực hành Laravel.' }}
                    </p>

                    <div class="d-flex flex-wrap gap-1 mb-2">
                        <span class="badge-table" title="Bảng CSDL">
                            <i class="bi bi-table me-1"></i> {{ $ex['table'] }}
                        </span>
                        <span class="badge bg-light text-secondary border" title="Model Eloquent">
                            <i class="bi bi-cpu me-1"></i> {{ $ex['model'] }}
                        </span>
                    </div>
                </div>

                <div class="card-footer bg-light border-0 py-2 d-flex justify-content-between align-items-center">
                    <a href="{{ route('baitap.show_bai', ['id' => $ex['num']]) }}" class="btn btn-sm btn-primary fw-bold px-3">
                        <i class="bi bi-play-circle-fill me-1"></i> Vào làm bài
                    </a>
                    <a href="{{ route('dashboard.init_single', ['id' => $ex['num']]) }}" class="btn btn-sm btn-outline-secondary" title="Khởi tạo CSDL riêng này trong phpMyAdmin">
                        <i class="bi bi-arrow-repeat me-1"></i> Tạo CSDL
                    </a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center py-5">
            <div class="text-muted fs-4 mb-2"><i class="bi bi-emoji-neutral"></i></div>
            <h5 class="text-muted">Không tìm thấy bài tập nào phù hợp với từ khóa "{{ $keyword }}"</h5>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-primary btn-sm mt-2">Xem tất cả 50 bài</a>
        </div>
    @endforelse
</div>
@endsection
