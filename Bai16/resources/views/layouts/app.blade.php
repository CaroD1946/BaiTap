<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đề Số 16: Hệ thống quản lý danh mục sản phẩm</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            color: #1e293b;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
        }
        .navbar-custom {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }
        .badge-db {
            background-color: #0284c7;
            color: white;
            font-family: monospace;
            padding: 5px 10px;
            border-radius: 6px;
        }
        .nav-btn {
            font-weight: 500;
            border-radius: 8px;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Top Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top py-2">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="/baitap/">
                <i class="bi bi-mortarboard-fill me-2 fs-4 text-warning"></i>
                <span>Đề Số 16: Hệ thống quản lý danh mục sản phẩm</span>
            </a>

            <div class="d-flex align-items-center mx-auto my-2 my-lg-0 gap-2">
                <!-- Nút Bài trước -->
                <a href="/baitap/Bai15/public" class="btn btn-sm btn-outline-light nav-btn">
                    <i class="bi bi-chevron-left me-1"></i> Bài 15
                </a>

                <!-- Dropdown Chọn nhanh 50 bài -->
                <div class="dropdown">
                    <button class="btn btn-sm btn-warning dropdown-toggle fw-bold nav-btn" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-grid-3x3-gap-fill me-1"></i> Đang ở Bài 16
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-center shadow" style="max-height: 400px; overflow-y: auto;">
                        <li><h6 class="dropdown-header text-warning">Chọn bài để chuyển đến:</h6></li>
                        <li><a class="dropdown-item py-1 " href="/baitap/Bai01/public"><span class="badge bg-secondary me-2">#01</span> Hệ thống quản lý bài viết tin tứ</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai02/public"><span class="badge bg-secondary me-2">#02</span> Hệ thống quản lý sản phẩm</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai03/public"><span class="badge bg-secondary me-2">#03</span> Hệ thống quản lý sinh viên</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai04/public"><span class="badge bg-secondary me-2">#04</span> Hệ thống quản lý thư viện</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai05/public"><span class="badge bg-secondary me-2">#05</span> Hệ thống quản lý đơn hàng</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai06/public"><span class="badge bg-secondary me-2">#06</span> Hệ thống quản lý khóa học</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai07/public"><span class="badge bg-secondary me-2">#07</span> Hệ thống quản lý nhân viên</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai08/public"><span class="badge bg-secondary me-2">#08</span> Hệ thống quản lý phòng trọ</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai09/public"><span class="badge bg-secondary me-2">#09</span> Hệ thống quản lý nhà hàng</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai10/public"><span class="badge bg-secondary me-2">#10</span> Hệ thống quản lý phòng khám</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai11/public"><span class="badge bg-secondary me-2">#11</span> Hệ thống quản lý công việc</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai12/public"><span class="badge bg-secondary me-2">#12</span> Hệ thống quản lý sự kiện</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai13/public"><span class="badge bg-secondary me-2">#13</span> Hệ thống quản lý bài tập trực tu</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai14/public"><span class="badge bg-secondary me-2">#14</span> Hệ thống quản lý kho hàng</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai15/public"><span class="badge bg-secondary me-2">#15</span> Hệ thống quản lý phản hồi khách </a></li>
<li><a class="dropdown-item py-1 active fw-bold" href="/baitap/Bai16/public"><span class="badge bg-secondary me-2">#16</span> Hệ thống quản lý danh mục sản ph</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai17/public"><span class="badge bg-secondary me-2">#17</span> Hệ thống quản lý nhà cung cấp</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai18/public"><span class="badge bg-secondary me-2">#18</span> Hệ thống quản lý phiếu bảo hành</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai19/public"><span class="badge bg-secondary me-2">#19</span> Hệ thống quản lý tuyển dụng</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai20/public"><span class="badge bg-secondary me-2">#20</span> Hệ thống quản lý hóa đơn</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai21/public"><span class="badge bg-secondary me-2">#21</span> Hệ thống quản lý bài đăng tuyển </a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai22/public"><span class="badge bg-secondary me-2">#22</span> Hệ thống quản lý tài liệu nội bộ</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai23/public"><span class="badge bg-secondary me-2">#23</span> Hệ thống quản lý lịch làm việc</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai24/public"><span class="badge bg-secondary me-2">#24</span> Hệ thống quản lý thiết bị</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai25/public"><span class="badge bg-secondary me-2">#25</span> Hệ thống quản lý yêu cầu hỗ trợ </a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai26/public"><span class="badge bg-secondary me-2">#26</span> Hệ thống quản lý cửa hàng điện t</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai27/public"><span class="badge bg-secondary me-2">#27</span> Hệ thống quản lý cửa hàng thời t</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai28/public"><span class="badge bg-secondary me-2">#28</span> Hệ thống quản lý dịch vụ sửa chữ</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai29/public"><span class="badge bg-secondary me-2">#29</span> Hệ thống quản lý đăng ký học phầ</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai30/public"><span class="badge bg-secondary me-2">#30</span> Hệ thống quản lý đăng ký hội thả</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai31/public"><span class="badge bg-secondary me-2">#31</span> Hệ thống quản lý công thức nấu ă</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai32/public"><span class="badge bg-secondary me-2">#32</span> Hệ thống quản lý câu hỏi trắc ng</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai33/public"><span class="badge bg-secondary me-2">#33</span> Hệ thống quản lý dự án phần mềm</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai34/public"><span class="badge bg-secondary me-2">#34</span> Hệ thống quản lý khách hàng</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai35/public"><span class="badge bg-secondary me-2">#35</span> Hệ thống quản lý phiếu nhập kho</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai36/public"><span class="badge bg-secondary me-2">#36</span> Hệ thống quản lý bài đánh giá sả</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai37/public"><span class="badge bg-secondary me-2">#37</span> Hệ thống quản lý chương trình kh</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai38/public"><span class="badge bg-secondary me-2">#38</span> Hệ thống quản lý đặt phòng khách</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai39/public"><span class="badge bg-secondary me-2">#39</span> Hệ thống quản lý phương tiện</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai40/public"><span class="badge bg-secondary me-2">#40</span> Hệ thống quản lý lịch hẹn</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai41/public"><span class="badge bg-secondary me-2">#41</span> Hệ thống quản lý chi phí dự án</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai42/public"><span class="badge bg-secondary me-2">#42</span> Hệ thống quản lý đăng ký thành v</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai43/public"><span class="badge bg-secondary me-2">#43</span> Hệ thống quản lý tin bất động sả</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai44/public"><span class="badge bg-secondary me-2">#44</span> Hệ thống quản lý yêu cầu mua hàn</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai45/public"><span class="badge bg-secondary me-2">#45</span> Hệ thống quản lý tài sản doanh n</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai46/public"><span class="badge bg-secondary me-2">#46</span> Hệ thống quản lý bài đăng diễn đ</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai47/public"><span class="badge bg-secondary me-2">#47</span> Hệ thống quản lý đăng ký dịch vụ</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai48/public"><span class="badge bg-secondary me-2">#48</span> Hệ thống quản lý đề tài nghiên c</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai49/public"><span class="badge bg-secondary me-2">#49</span> Hệ thống quản lý đăng ký thực tậ</a></li>
<li><a class="dropdown-item py-1 " href="/baitap/Bai50/public"><span class="badge bg-secondary me-2">#50</span> Hệ thống quản lý bán hàng tổng h</a></li>
                    </ul>
                </div>

                <!-- Nút Bài tiếp theo -->
                <a href="/baitap/Bai17/public" class="btn btn-sm btn-outline-light nav-btn">
                    Bài 17 <i class="bi bi-chevron-right ms-1"></i>
                </a>
            </div>

            <div class="d-flex align-items-center ms-auto gap-2">
                <!-- Về UI Tổng -->
                <a href="/baitap/" class="btn btn-sm btn-light text-primary fw-bold nav-btn">
                    <i class="bi bi-house-door-fill me-1"></i> UI Tổng (50 Bài)
                </a>

                <!-- Toggle Admin (Câu 8) -->
                <form action="{{ route('toggle_admin') }}" method="POST" class="d-inline">
                    @csrf
                    @if(session('is_admin', true))
                        <button type="submit" class="btn btn-sm btn-success nav-btn shadow-sm" title="Click để test phân quyền Khách">
                            <i class="bi bi-shield-lock-fill me-1"></i> Role: Admin <i class="bi bi-arrow-repeat ms-1"></i>
                        </button>
                    @else
                        <button type="submit" class="btn btn-sm btn-secondary nav-btn shadow-sm" title="Click để bật quyền Admin">
                            <i class="bi bi-person-fill me-1"></i> Role: Khách <i class="bi bi-arrow-repeat ms-1"></i>
                        </button>
                    @endif
                </form>

                <!-- Link phpMyAdmin -->
                <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=db_bai16" target="_blank" class="btn btn-sm btn-outline-light nav-btn" title="Xem CSDL db_bai16 trong phpMyAdmin">
                    <i class="bi bi-database me-1"></i> phpMyAdmin
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <main class="container-fluid px-4 py-4 flex-grow-1">
        <!-- Flash Alerts -->
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
                <div class="fw-bold mb-1"><i class="bi bi-exclamation-octagon-fill me-2"></i> Lỗi Validation (Câu 5):</div>
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Accordion Mô tả đề bài & 8 câu hỏi -->
        <div class="accordion mb-4 shadow-sm" id="accordionExam">
            <div class="accordion-item border-0">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-white fw-bold text-primary py-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExam">
                        <i class="bi bi-journal-text me-2"></i> [ĐỀ SỐ 16] Hệ thống quản lý danh mục sản phẩm - Bấm để xem đề bài & 8 câu hỏi chi tiết
                    </button>
                </h2>
                <div id="collapseExam" class="accordion-collapse collapse" data-bs-parent="#accordionExam">
                    <div class="accordion-body bg-light border-top">
                        <div class="mb-2"><strong>Mô tả tình huống:</strong> Cửa hàng cần quản lý danh mục sản phẩm gồm tên danh mục, mô  tả và trạng thái. Mỗi danh mục có thể chứa nhiều sản phẩm; danh mục đang được sử  dụng không được xóa tùy tiện.</div>
                        <div class="mb-2"><strong>CSDL riêng biệt (phpMyAdmin):</strong> <code>db_bai16</code> | <strong>Bảng:</strong> <code>categories</code> | <strong>Model:</strong> <code>Category</code></div>
                        <div class="card p-3 bg-white border">
                            <h6 class="fw-bold text-dark mb-2">Toàn văn đề bài từ PDF:</h6>
                            <pre class="mb-0 text-secondary small" style="white-space: pre-wrap; font-family: inherit;">ĐỀ SỐ 16. Hệ thống quản lý danh mục sản phẩm 
- Mô tả tình huống: Cửa hàng cần quản lý danh mục sản phẩm gồm tên danh mục, mô 
tả và trạng thái. Mỗi danh mục có thể chứa nhiều sản phẩm; danh mục đang được sử 
dụng không được xóa tùy tiện. 
- Yêu cầu: 
Câu 1. Khởi tạo dự án Laravel và thiết lập cơ sở dữ liệu. 
Câu 2. Khai báo Route cho danh sách danh mục, tạo, lưu, chỉnh sửa và cập nhật danh mục. 
Câu 3. Tạo CategoryController xử lý danh sách và chi tiết danh mục. 
Câu 4. Xây dựng giao diện Blade hiển thị danh mục và trạng thái hoạt động. 
Câu 5. Validation tên danh mục bắt buộc, giới hạn độ dài và kiểm tra tính duy nhất. 
Câu 6. Tạo Migration, Model Category; xây dựng quan hệ một-nhiều với Model Product 
và triển khai truy vấn danh mục cùng sản phẩm. 
Câu 7. Sử dụng Query Builder thống kê số sản phẩm thuộc từng danh mục. 
Câu 8. Bảo vệ chức năng quản trị bằng Middleware; kiểm tra điều kiện trước khi xóa danh 
mục có sản phẩm liên quan. 
--- HẾT --- 
  </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-top py-3 mt-auto">
        <div class="container-fluid px-4 d-flex flex-wrap justify-content-between align-items-center">
            <span class="text-muted small">
                <strong>Bài 16: Hệ thống quản lý danh mục sản phẩm</strong> &copy; 2026. Dự án độc lập có thể nộp và tải riêng biệt.
            </span>
            <div class="text-muted small">
                <span>Database: <code>db_bai16</code> (MySQL / phpMyAdmin)</span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
