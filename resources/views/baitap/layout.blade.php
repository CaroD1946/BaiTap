<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '50 Bài Tập Thực Hành Laravel')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
        }
        .navbar-custom {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }
        .card-custom {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
            transition: all 0.2s ease-in-out;
        }
        .card-custom:hover {
            box-shadow: 0 10px 15px -3px rgba(0,0,0,0.08);
            transform: translateY(-2px);
        }
        .badge-db {
            background-color: #0284c7;
            color: white;
            font-family: monospace;
            font-size: 0.85rem;
            padding: 5px 10px;
            border-radius: 6px;
        }
        .badge-table {
            background-color: #475569;
            color: white;
            font-family: monospace;
            font-size: 0.85rem;
            padding: 5px 10px;
            border-radius: 6px;
        }
        .nav-btn {
            font-weight: 500;
            border-radius: 8px;
            padding: 6px 14px;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top py-2">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ route('dashboard') }}">
                <i class="bi bi-mortarboard-fill me-2 fs-4 text-warning"></i>
                <span>Ôn Tập Thực Hành Laravel <span class="badge bg-warning text-dark ms-1">50 ĐỀ</span></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navContent">
                <!-- Direct Nav buttons (Bài trước, Chọn bài, Bài tiếp) -->
                @if(isset($meta))
                    <div class="d-flex align-items-center mx-auto my-2 my-lg-0 gap-2">
                        <!-- Nút Bài trước -->
                        @if($meta['num'] > 1)
                            <a href="{{ route('baitap.show_bai', ['id' => $meta['num'] - 1]) }}" class="btn btn-sm btn-outline-light nav-btn">
                                <i class="bi bi-chevron-left me-1"></i> Bài {{ $meta['num'] - 1 }}
                            </a>
                        @else
                            <button class="btn btn-sm btn-outline-light nav-btn disabled" disabled>
                                <i class="bi bi-chevron-left me-1"></i> Đầu tiên
                            </button>
                        @endif

                        <!-- Dropdown Chọn bài 1 đến 50 -->
                        <div class="dropdown">
                            <button class="btn btn-sm btn-warning dropdown-toggle fw-bold nav-btn" type="button" data-bs-toggle="dropdown">
                                <i class="bi bi-grid-3x3-gap-fill me-1"></i> Đang ở Bài {{ sprintf('%02d', $meta['num']) }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-center shadow" style="max-height: 400px; overflow-y: auto;">
                                <li><h6 class="dropdown-header text-warning">Danh sách 50 Bài Tập</h6></li>
                                @if(isset($allExercises))
                                    @foreach($allExercises as $ex)
                                        <li>
                                            <a class="dropdown-item py-1 {{ $ex['num'] == $meta['num'] ? 'active fw-bold' : '' }}" 
                                               href="{{ route('baitap.show_bai', ['id' => $ex['num']]) }}">
                                                <span class="badge bg-secondary me-2">#{{ sprintf('%02d', $ex['num']) }}</span>
                                                {{ Str::limit($ex['title'], 36) }}
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>

                        <!-- Nút Bài tiếp theo -->
                        @if($meta['num'] < 50)
                            <a href="{{ route('baitap.show_bai', ['id' => $meta['num'] + 1]) }}" class="btn btn-sm btn-outline-light nav-btn">
                                Bài {{ $meta['num'] + 1 }} <i class="bi bi-chevron-right ms-1"></i>
                            </a>
                        @else
                            <button class="btn btn-sm btn-outline-light nav-btn disabled" disabled>
                                Kết thúc <i class="bi bi-chevron-right ms-1"></i>
                            </button>
                        @endif
                    </div>
                @endif

                <div class="d-flex align-items-center ms-auto gap-2">
                    <!-- Nút về UI Tổng -->
                    <a href="{{ route('dashboard') }}" class="btn btn-sm btn-light text-primary fw-bold nav-btn">
                        <i class="bi bi-house-door-fill me-1"></i> UI Tổng
                    </a>

                    <!-- Toggle Admin Role (Câu 8 Middleware Demo) -->
                    <form action="{{ route('baitap.toggle_admin') }}" method="POST" class="d-inline">
                        @csrf
                        @if(session('is_admin', true))
                            <button type="submit" class="btn btn-sm btn-success nav-btn shadow-sm" title="Bấm để chuyển sang vai trò Khách để test Câu 8 Middleware">
                                <i class="bi bi-shield-lock-fill me-1"></i> Vai trò: Admin <i class="bi bi-arrow-repeat ms-1"></i>
                            </button>
                        @else
                            <button type="submit" class="btn btn-sm btn-secondary nav-btn shadow-sm" title="Bấm để bật lại quyền Admin">
                                <i class="bi bi-person-fill me-1"></i> Vai trò: Khách <i class="bi bi-arrow-repeat ms-1"></i>
                            </button>
                        @endif
                    </form>

                    <!-- Link phpMyAdmin -->
                    <a href="http://localhost/phpmyadmin/" target="_blank" class="btn btn-sm btn-outline-light nav-btn" title="Mở phpMyAdmin trên XAMPP">
                        <i class="bi bi-database me-1"></i> phpMyAdmin
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Container -->
    <main class="container-fluid px-4 py-4 flex-grow-1">
        <!-- Flash Messages -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                <i class="bi bi-check-circle-fill me-2 fs-5 align-middle"></i>
                <strong>Thành công:</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2 fs-5 align-middle"></i>
                <strong>Thông báo:</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('info'))
            <div class="alert alert-info alert-dismissible fade show shadow-sm" role="alert">
                <i class="bi bi-info-circle-fill me-2 fs-5 align-middle"></i>
                {{ session('info') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-warning alert-dismissible fade show shadow-sm" role="alert">
                <div class="fw-bold mb-1"><i class="bi bi-exclamation-octagon-fill me-2"></i> Lỗi kiểm tra dữ liệu đầu vào (Validation - Câu 5):</div>
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-top py-3 mt-auto">
        <div class="container-fluid px-4 d-flex flex-wrap justify-content-between align-items-center">
            <span class="text-muted small">
                <strong>Hệ Thống Ôn Tập Môn Thực Hành Laravel</strong> &copy; 2026. Chạy qua XAMPP & phpMyAdmin.
            </span>
            <div class="text-muted small">
                <span>Cơ sở dữ liệu độc lập <code>db_bai01</code> &rarr; <code>db_bai50</code></span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
