@extends('baitap.layout')

@section('title', 'Đề Số ' . sprintf('%02d', $meta['num']) . ': ' . $meta['title'])

@section('content')
<!-- Exercise Header Card -->
<div class="card card-custom bg-white p-4 mb-4 border-0 shadow-sm">
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3">
        <div>
            <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                <span class="badge bg-primary fs-6 px-3 py-1">
                    ĐỀ SỐ {{ sprintf('%02d', $meta['num']) }}
                </span>
                <span class="badge-db" title="Cơ sở dữ liệu độc lập trên MySQL/phpMyAdmin">
                    <i class="bi bi-database me-1"></i> {{ $meta['db_name'] }}
                </span>
                <span class="badge-table" title="Bảng dữ liệu">
                    <i class="bi bi-table me-1"></i> {{ $meta['table'] }}
                </span>
                <span class="badge bg-success-subtle text-success border border-success-subtle">
                    <i class="bi bi-check2-circle me-1"></i> Tổng số: {{ $items->total() }} bản ghi
                </span>
            </div>
            <h3 class="fw-bold text-dark mb-1">{{ $meta['title'] }}</h3>
            <p class="text-muted mb-0 small">{{ $meta['desc'] }}</p>
        </div>

        <div class="d-flex flex-wrap gap-2">
            <!-- Nút Thêm mới dữ liệu -->
            <button type="button" class="btn btn-primary fw-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#modalCreate">
                <i class="bi bi-plus-circle-fill me-1"></i> Thêm mới
            </button>

            <!-- Nút Reset / Nạp lại CSDL mẫu -->
            <form action="{{ route('baitap.reseed', ['id' => $meta['num']]) }}" method="POST" onsubmit="return confirm('Bạn có muốn đặt lại CSDL và nạp lại dữ liệu mẫu cho bài này không?');">
                @csrf
                <button type="submit" class="btn btn-outline-secondary fw-semibold" title="Nạp lại dữ liệu mẫu ban đầu">
                    <i class="bi bi-arrow-counterclockwise me-1"></i> Reset mẫu
                </button>
            </form>

            <!-- Link mở CSDL trong phpMyAdmin -->
            <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db={{ $meta['db_name'] }}" target="_blank" class="btn btn-outline-primary" title="Xem cơ sở dữ liệu này trong phpMyAdmin">
                <i class="bi bi-box-arrow-up-right me-1"></i> Mở phpMyAdmin
            </a>
        </div>
    </div>
</div>

<!-- Main Tabs -->
<ul class="nav nav-tabs nav-tabs-bordered mb-4" id="mainTab" role="tablist">
    <li class="nav-item">
        <button class="nav-link active fw-bold px-4 py-2" id="crud-tab" data-bs-toggle="tab" data-bs-target="#crud-content" type="button">
            <i class="bi bi-table me-2"></i> 1. Dữ Liệu & Thao Tác (CRUD)
        </button>
    </li>
    <li class="nav-item">
        <button class="nav-link fw-bold px-4 py-2 text-secondary" id="exam-tab" data-bs-toggle="tab" data-bs-target="#exam-content" type="button">
            <i class="bi bi-file-earmark-text-fill me-2"></i> 2. Đề Bài & 8 Câu Hỏi Chi Tiết
        </button>
    </li>
    <li class="nav-item">
        <button class="nav-link fw-bold px-4 py-2 text-secondary" id="db-tab" data-bs-toggle="tab" data-bs-target="#db-content" type="button">
            <i class="bi bi-hdd-network me-2"></i> 3. Cấu Trúc CSDL & phpMyAdmin
        </button>
    </li>
</ul>

<div class="tab-content" id="mainTabContent">
    <!-- TAB 1: CRUD & DATA -->
    <div class="tab-pane fade show active" id="crud-content" role="tabpanel">
        <div class="card card-custom bg-white border-0 p-3 mb-4 shadow-sm">
            <!-- Filter & Search Toolbar (Câu 7 Query Builder) -->
            <form action="{{ route('baitap.show_bai', ['id' => $meta['num']]) }}" method="GET" class="row g-2 align-items-center">
                <!-- Search input -->
                <div class="col-md-5 col-lg-6">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" name="search" value="{{ $search ?? '' }}" class="form-control border-start-0" 
                               placeholder="Tìm kiếm theo từ khóa (Câu 7: Query Builder)...">
                    </div>
                </div>

                <!-- Dropdown filter if any filterable field -->
                @php
                    $filterFieldDef = null;
                    foreach ($meta['fields'] as $f) {
                        if (!empty($f['filterable']) && ($f['type'] ?? '') == 'select') {
                            $filterFieldDef = $f;
                            break;
                        }
                    }
                @endphp

                @if($filterFieldDef)
                    <div class="col-md-4 col-lg-4">
                        <select name="{{ $filterFieldDef['name'] }}" class="form-select">
                            <option value="">-- Lọc theo {{ $filterFieldDef['label'] }} --</option>
                            @foreach($filterFieldDef['options'] as $opt)
                                <option value="{{ $opt }}" {{ ($filterValue ?? '') == $opt ? 'selected' : '' }}>
                                    {{ $opt }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                @endif

                <div class="col-md-3 col-lg-2 d-flex gap-2">
                    <button type="submit" class="btn btn-dark w-100 fw-semibold">
                        <i class="bi bi-funnel me-1"></i> Lọc
                    </button>
                    @if(!empty($search) || !empty($filterValue))
                        <a href="{{ route('baitap.show_bai', ['id' => $meta['num']]) }}" class="btn btn-outline-secondary" title="Xóa bộ lọc">
                            <i class="bi bi-x-lg"></i>
                        </a>
                    @endif
                </div>
            </form>
        </div>

        <!-- Table displaying items -->
        <div class="card card-custom bg-white border-0 shadow-sm overflow-hidden">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-secondary">
                        <tr>
                            <th style="width: 50px;" class="text-center">#ID</th>
                            @foreach($meta['fields'] as $f)
                                <th>{{ $f['label'] }}</th>
                            @endforeach
                            <th style="width: 150px;" class="text-center">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($items as $row)
                            <tr>
                                <td class="text-center fw-bold text-muted">{{ $row->id }}</td>
                                @foreach($meta['fields'] as $f)
                                    @php
                                        $val = $row->{$f['name']} ?? '';
                                    @endphp
                                    <td>
                                        @if(($f['type'] ?? '') == 'select')
                                            <span class="badge bg-secondary-subtle text-secondary border">
                                                {{ $val }}
                                            </span>
                                        @elseif(($f['type'] ?? '') == 'number')
                                            @if(str_contains($f['name'], 'price') || str_contains($f['name'], 'cost') || str_contains($f['name'], 'amount') || str_contains($f['name'], 'budget') || str_contains($f['name'], 'fee'))
                                                <span class="fw-bold text-primary">{{ number_format($val, 0, ',', '.') }} đ</span>
                                            @else
                                                <span class="fw-semibold">{{ $val }}</span>
                                            @endif
                                        @elseif(($f['type'] ?? '') == 'date')
                                            <span class="text-muted small"><i class="bi bi-calendar3 me-1"></i> {{ $val }}</span>
                                        @elseif(($f['type'] ?? '') == 'textarea')
                                            <span class="small text-muted" title="{{ $val }}">
                                                {{ Str::limit($val, 45) }}
                                            </span>
                                        @else
                                            <span>{{ $val }}</span>
                                        @endif
                                    </td>
                                @endforeach
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <!-- Nút Sửa -->
                                        <button type="button" class="btn btn-outline-primary btn-edit" 
                                                data-bs-toggle="modal" data-bs-target="#modalEdit"
                                                data-id="{{ $row->id }}"
                                                data-json="{{ json_encode($row) }}"
                                                title="Sửa bản ghi">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>

                                        <!-- Nút Xóa (Câu 8 Middleware) -->
                                        <form action="{{ route('baitap.destroy_item', ['id' => $meta['num'], 'itemId' => $row->id]) }}" 
                                              method="POST" class="d-inline"
                                              onsubmit="return confirm('Bạn có chắc chắn muốn xóa bản ghi #{{ $row->id }} không? (Yêu cầu quyền Admin - Câu 8)');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" title="Xóa bản ghi (Câu 8)">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="{{ count($meta['fields']) + 2 }}" class="text-center py-5 text-muted">
                                    <i class="bi bi-inbox fs-1 d-block mb-2 text-secondary"></i>
                                    Chưa có dữ liệu nào trong bảng <code>{{ $meta['table'] }}</code> của cơ sở dữ liệu <code>{{ $meta['db_name'] }}</code>.<br>
                                    Bấm nút <strong>"Thêm mới"</strong> hoặc <strong>"Reset mẫu"</strong> ở góc phải trên để tạo dữ liệu!
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($items->hasPages())
                <div class="card-footer bg-white border-top py-3 d-flex justify-content-between align-items-center">
                    <span class="small text-muted">
                        Hiển thị {{ $items->firstItem() ?? 0 }} - {{ $items->lastItem() ?? 0 }} trong tổng số {{ $items->total() }} bản ghi
                    </span>
                    <div>
                        {{ $items->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- TAB 2: EXAM SPEC & 8 QUESTIONS -->
    <div class="tab-pane fade" id="exam-content" role="tabpanel">
        <div class="card card-custom bg-white border-0 p-4 shadow-sm mb-4">
            <h4 class="fw-bold text-primary mb-3">
                <i class="bi bi-journal-check me-2"></i> ĐỀ BÀI ÔN TẬP THỰC HÀNH - ĐỀ SỐ {{ $meta['num'] }}
            </h4>

            <div class="alert alert-light border p-3 mb-4">
                <h6 class="fw-bold text-dark"><i class="bi bi-info-circle-fill text-primary me-2"></i> Mô tả tình huống:</h6>
                <p class="mb-0 text-secondary">{{ $meta['desc'] }}</p>
            </div>

            <h5 class="fw-bold text-dark mb-3">Yêu Cầu & Lời Giải 8 Câu Hỏi Đề Bài:</h5>
            <div class="accordion" id="accordionQuestions">
                @php
                    $cauLabels = [
                        1 => 'Khởi tạo dự án & Cấu hình CSDL riêng biệt trong phpMyAdmin',
                        2 => 'Khai báo các Route hiển thị, tạo mới, lưu, xem chi tiết, sửa và cập nhật',
                        3 => 'Tạo Controller (' . $meta['controller'] . ') triển khai các phương thức xử lý',
                        4 => 'Xây dựng giao diện Blade hiển thị danh sách, thông báo flash và layout chung',
                        5 => 'Xử lý dữ liệu Request & Validation ràng buộc dữ liệu đầu vào',
                        6 => 'Tạo Migration bảng `' . $meta['table'] . '`, Model `' . $meta['model'] . '` và CRUD Eloquent',
                        7 => 'Sử dụng Query Builder tìm kiếm & lọc dữ liệu theo điều kiện',
                        8 => 'Áp dụng Middleware bảo vệ quyền quản trị (Admin) và kiểm thử'
                    ];
                @endphp

                @foreach($cauLabels as $cauNum => $cauTitle)
                    <div class="accordion-item border mb-2 rounded overflow-hidden">
                        <h2 class="accordion-header" id="heading{{ $cauNum }}">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $cauNum }}">
                                <span class="badge bg-primary me-2">Câu {{ $cauNum }}</span> {{ $cauTitle }}
                            </button>
                        </h2>
                        <div id="collapse{{ $cauNum }}" class="accordion-collapse collapse" data-bs-parent="#accordionQuestions">
                            <div class="accordion-body bg-light">
                                @if($cauNum == 1)
                                    <p>Đã cấu hình hệ thống kết nối MySQL XAMPP với database riêng biệt cho bài này: <code>{{ $meta['db_name'] }}</code>.</p>
                                    <p class="mb-0">Có thể kiểm tra trực tiếp trong phpMyAdmin tại: <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db={{ $meta['db_name'] }}" target="_blank">http://localhost/phpmyadmin/ ({{ $meta['db_name'] }})</a>.</p>
                                @elseif($cauNum == 2)
                                    <p>Đã khai báo toàn bộ Resource Routes chuẩn RESTful trong <code>routes/web.php</code>:</p>
                                    <ul>
                                        <li><code>GET /bai/{{ $meta['num'] }}</code> &rarr; index()</li>
                                        <li><code>POST /bai/{{ $meta['num'] }}</code> &rarr; store()</li>
                                        <li><code>GET /bai/{{ $meta['num'] }}/{id}</code> &rarr; show()</li>
                                        <li><code>PUT /bai/{{ $meta['num'] }}/{id}</code> &rarr; update()</li>
                                        <li><code>DELETE /bai/{{ $meta['num'] }}/{id}</code> &rarr; destroy()</li>
                                    </ul>
                                @elseif($cauNum == 3)
                                    <p>Controller riêng của bài: <code>app/Http/Controllers/BaiTap/{{ $meta['controller'] }}.php</code> kế thừa đầy đủ logic CRUD từ <code>BaseBaiTapController</code>.</p>
                                @elseif($cauNum == 4)
                                    <p>Giao diện Blade được xây dựng trên layout chuẩn <code>baitap.layout</code>, có bảng dữ liệu, nút bấm qua lại giữa các bài, và thông báo kết quả thao tác (success, error, validation error).</p>
                                @elseif($cauNum == 5)
                                    <p>Đã thiết lập bộ Validation Rules nghiêm ngặt:</p>
                                    <ul class="mb-0">
                                        @foreach($meta['fields'] as $f)
                                            <li><strong>{{ $f['label'] }} (<code>{{ $f['name'] }}</code>):</strong> <code>{{ $f['rules'] }}</code></li>
                                        @endforeach
                                    </ul>
                                @elseif($cauNum == 6)
                                    <p>Đã tạo Model Eloquent: <code>App\Models\BaiTap\Bai{{ sprintf('%02d', $meta['num']) }}{{ $meta['model'] }}</code> liên kết tới bảng <code>{{ $meta['table'] }}</code> trên kết nối động <code>dynamic_bai</code>.</p>
                                @elseif($cauNum == 7)
                                    <p>Đã tích hợp Query Builder để tìm kiếm theo từ khóa và lọc dữ liệu theo tiêu chí (xem thanh tìm kiếm ở Tab 1).</p>
                                @elseif($cauNum == 8)
                                    <p>Đã tích hợp kiểm tra quyền quản trị: Khi người dùng ở vai trò <strong>Khách (Guest)</strong>, hành động Xóa sẽ bị chặn lại bởi Middleware với mã lỗi 403. Người dùng có thể bấm nút chuyển đổi vai trò ở thanh trên cùng để kiểm thử trực tiếp.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- TAB 3: DATABASE INFO -->
    <div class="tab-pane fade" id="db-content" role="tabpanel">
        <div class="card card-custom bg-white border-0 p-4 shadow-sm">
            <h4 class="fw-bold text-primary mb-3">
                <i class="bi bi-hdd-stack-fill me-2"></i> Chi Tiết Cơ Sở Dữ Liệu Trong phpMyAdmin
            </h4>

            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="p-3 bg-light rounded border">
                        <small class="text-muted d-block">Tên Cơ Sở Dữ Liệu (Database):</small>
                        <strong class="fs-5 text-primary"><code>{{ $meta['db_name'] }}</code></strong>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-light rounded border">
                        <small class="text-muted d-block">Tên Bảng Dữ Liệu (Table):</small>
                        <strong class="fs-5 text-dark"><code>{{ $meta['table'] }}</code></strong>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-light rounded border">
                        <small class="text-muted d-block">Tổng số bản ghi hiện có:</small>
                        <strong class="fs-5 text-success">{{ $items->total() }} bản ghi</strong>
                    </div>
                </div>
            </div>

            <h5 class="fw-bold text-dark mb-2">Cấu trúc các cột của bảng <code>{{ $meta['table'] }}</code>:</h5>
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Tên cột (Field)</th>
                            <th>Tiêu đề (Label)</th>
                            <th>Kiểu dữ liệu</th>
                            <th>Quy tắc kiểm tra (Rules - Câu 5)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>id</code></td>
                            <td>Mã định danh tự tăng</td>
                            <td><code>BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY</code></td>
                            <td>Khóa chính</td>
                        </tr>
                        @foreach($meta['fields'] as $f)
                            <tr>
                                <td><code>{{ $f['name'] }}</code></td>
                                <td>{{ $f['label'] }}</td>
                                <td><code>{{ $f['type'] }}</code></td>
                                <td><span class="badge bg-light text-dark border">{{ $f['rules'] }}</span></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td><code>created_at</code>, <code>updated_at</code></td>
                            <td>Thời gian tạo & cập nhật</td>
                            <td><code>TIMESTAMP NULL</code></td>
                            <td>Mặc định Laravel</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db={{ $meta['db_name'] }}" target="_blank" class="btn btn-primary fw-bold">
                    <i class="bi bi-box-arrow-up-right me-1"></i> Truy Cập phpMyAdmin Để Xem Bảng Này
                </a>
            </div>
        </div>
    </div>
</div>

<!-- MODAL THÊM MỚI -->
<div class="modal fade" id="modalCreate" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('baitap.store_item', ['id' => $meta['num']]) }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số {{ $meta['num'] }})
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-toggle="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="alert alert-info py-2 small mb-3">
                    <i class="bi bi-info-circle-fill me-1"></i> Dữ liệu sẽ được lưu trực tiếp vào CSDL <strong>{{ $meta['db_name'] }}</strong> &rarr; bảng <strong>{{ $meta['table'] }}</strong>.
                </div>

                <div class="row g-3">
                    @foreach($meta['fields'] as $f)
                        <div class="{{ ($f['type'] ?? '') == 'textarea' ? 'col-12' : 'col-md-6' }}">
                            <label class="form-label fw-bold small text-dark">
                                {{ $f['label'] }} 
                                @if(str_contains($f['rules'], 'required'))
                                    <span class="text-danger">*</span>
                                @endif
                            </label>

                            @if(($f['type'] ?? '') == 'select')
                                <select name="{{ $f['name'] }}" class="form-select" {{ str_contains($f['rules'], 'required') ? 'required' : '' }}>
                                    <option value="">-- Chọn {{ $f['label'] }} --</option>
                                    @foreach($f['options'] as $opt)
                                        <option value="{{ $opt }}" {{ old($f['name']) == $opt ? 'selected' : '' }}>{{ $opt }}</option>
                                    @endforeach
                                </select>
                            @elseif(($f['type'] ?? '') == 'textarea')
                                <textarea name="{{ $f['name'] }}" rows="3" class="form-control" 
                                          placeholder="Nhập {{ mb_strtolower($f['label']) }}..."
                                          {{ str_contains($f['rules'], 'required') ? 'required' : '' }}>{{ old($f['name']) }}</textarea>
                            @elseif(($f['type'] ?? '') == 'date')
                                <input type="date" name="{{ $f['name'] }}" value="{{ old($f['name'], date('Y-m-d')) }}" 
                                       class="form-control" {{ str_contains($f['rules'], 'required') ? 'required' : '' }}>
                            @elseif(($f['type'] ?? '') == 'number')
                                <input type="number" step="any" name="{{ $f['name'] }}" value="{{ old($f['name']) }}" 
                                       class="form-control" placeholder="Nhập số..." {{ str_contains($f['rules'], 'required') ? 'required' : '' }}>
                            @elseif(($f['type'] ?? '') == 'email')
                                <input type="email" name="{{ $f['name'] }}" value="{{ old($f['name']) }}" 
                                       class="form-control" placeholder="user@example.com" {{ str_contains($f['rules'], 'required') ? 'required' : '' }}>
                            @else
                                <input type="text" name="{{ $f['name'] }}" value="{{ old($f['name']) }}" 
                                       class="form-control" placeholder="Nhập {{ mb_strtolower($f['label']) }}..." {{ str_contains($f['rules'], 'required') ? 'required' : '' }}>
                            @endif
                            <div class="form-text small text-muted">Quy tắc: <code>{{ $f['rules'] }}</code></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <button type="submit" class="btn btn-primary fw-bold px-4">
                    <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                </button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL CHỈNH SỬA -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form id="formEdit" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            @method('PUT')
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title fw-bold">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #<span id="editIdSpan"></span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-3">
                    @foreach($meta['fields'] as $f)
                        <div class="{{ ($f['type'] ?? '') == 'textarea' ? 'col-12' : 'col-md-6' }}">
                            <label class="form-label fw-bold small text-dark">{{ $f['label'] }}</label>

                            @if(($f['type'] ?? '') == 'select')
                                <select name="{{ $f['name'] }}" id="edit_{{ $f['name'] }}" class="form-select">
                                    <option value="">-- Chọn {{ $f['label'] }} --</option>
                                    @foreach($f['options'] as $opt)
                                        <option value="{{ $opt }}">{{ $opt }}</option>
                                    @endforeach
                                </select>
                            @elseif(($f['type'] ?? '') == 'textarea')
                                <textarea name="{{ $f['name'] }}" id="edit_{{ $f['name'] }}" rows="3" class="form-control"></textarea>
                            @elseif(($f['type'] ?? '') == 'date')
                                <input type="date" name="{{ $f['name'] }}" id="edit_{{ $f['name'] }}" class="form-control">
                            @elseif(($f['type'] ?? '') == 'number')
                                <input type="number" step="any" name="{{ $f['name'] }}" id="edit_{{ $f['name'] }}" class="form-control">
                            @else
                                <input type="text" name="{{ $f['name'] }}" id="edit_{{ $f['name'] }}" class="form-control">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-dark fw-bold px-4">
                    <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.btn-edit');
        const formEdit = document.getElementById('formEdit');
        const editIdSpan = document.getElementById('editIdSpan');

        editButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                const id = this.getAttribute('data-id');
                const rawJson = this.getAttribute('data-json');
                const data = JSON.parse(rawJson);

                editIdSpan.textContent = id;
                formEdit.action = `/bai/{{ $meta['num'] }}/` + id;

                // Fill inputs
                for (const key in data) {
                    const input = document.getElementById('edit_' + key);
                    if (input) {
                        input.value = data[key];
                    }
                }
            });
        });
    });
</script>
@endpush
