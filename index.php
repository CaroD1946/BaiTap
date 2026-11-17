<?php
/**
 * BẢNG ĐIỀU KHIỂN TỔNG HỢP - 50 DỰ ÁN LARAVEL ĐỘC LẬP
 * Truy cập: http://localhost/baitap/
 */

$metaFile = __DIR__ . '/database/data/all_exercises_meta.json';
$exercises = file_exists($metaFile) ? json_decode(file_get_contents($metaFile), true) : [];

$search = isset($_GET['q']) ? trim($_GET['q']) : '';
if (!empty($search)) {
    $exercises = array_filter($exercises, function ($ex) use ($search) {
        return str_contains(mb_strtolower($ex['title']), mb_strtolower($search)) ||
               str_contains(mb_strtolower($ex['desc']), mb_strtolower($search)) ||
               str_contains((string)$ex['num'], $search) ||
               str_contains(mb_strtolower($ex['table']), mb_strtolower($search));
    });
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Điều Khiển Tổng Hợp - 50 Dự Án Laravel Độc Lập</title>
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
        .hero-banner {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
            color: white;
            border-radius: 16px;
            padding: 35px;
            box-shadow: 0 10px 25px -5px rgba(37, 99, 235, 0.2);
        }
        .card-project {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            transition: all 0.2s ease-in-out;
            background: #ffffff;
        }
        .card-project:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 20px -5px rgba(0,0,0,0.08);
            border-color: #93c5fd;
        }
        .badge-db {
            background-color: #0284c7;
            color: white;
            font-family: monospace;
            padding: 5px 10px;
            border-radius: 6px;
        }
        .badge-table {
            background-color: #475569;
            color: white;
            font-family: monospace;
            padding: 5px 10px;
            border-radius: 6px;
        }
        .badge-folder {
            background-color: #f1f5f9;
            color: #0f172a;
            border: 1px solid #cbd5e1;
            font-family: monospace;
            padding: 4px 8px;
            border-radius: 6px;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <div class="container-fluid px-4 py-4 flex-grow-1">
        <!-- Hero Header -->
        <div class="hero-banner mb-4">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3">
                <div>
                    <span class="badge bg-warning text-dark fw-bold px-3 py-2 mb-2 fs-6">
                        <i class="bi bi-box-seam me-1"></i> TÁCH BIỆT 50 LARAVEL RIÊNG BIỆT
                    </span>
                    <h2 class="fw-bold mb-2">Hệ Thống 50 Dự Án Laravel Độc Lập - Ôn Tập Thực Hành</h2>
                    <p class="mb-0 text-white-50 fs-6">
                        Mỗi bài tập là <strong>1 dự án Laravel hoàn chỉnh</strong> (thư mục <code>Bai01/</code> đến <code>Bai50/</code>). Bạn có thể <strong>chọn nộp hoặc tải lẻ từng bài</strong> để nộp bài tập mà không cần tải full 50 bài!
                    </p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a href="http://localhost/phpmyadmin/" target="_blank" class="btn btn-light fw-bold text-primary shadow-sm px-3">
                        <i class="bi bi-database me-1"></i> Mở phpMyAdmin (50 DB)
                    </a>
                    <button type="button" class="btn btn-outline-light fw-semibold" data-bs-toggle="modal" data-bs-target="#modalGuide">
                        <i class="bi bi-question-circle me-1"></i> Hướng dẫn nộp bài lẻ
                    </button>
                </div>
            </div>

            <hr class="my-3 border-light opacity-25">

            <!-- Search bar -->
            <form action="" method="GET" class="row g-2 align-items-center">
                <div class="col-md-9 col-lg-10">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-0"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" name="q" value="<?= htmlspecialchars($search) ?>" class="form-control border-0" 
                               placeholder="Tìm kiếm bài tập theo tên đề, mã bài, từ khóa (ví dụ: sản phẩm, sinh viên, đơn hàng, hóa đơn, 1, 25...)...">
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 d-flex gap-2">
                    <button type="submit" class="btn btn-warning w-100 fw-bold">
                        <i class="bi bi-funnel me-1"></i> Lọc đề bài
                    </button>
                    <?php if (!empty($search)): ?>
                        <a href="index.php" class="btn btn-outline-light" title="Xóa bộ lọc">
                            <i class="bi bi-x-lg"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </form>
        </div>

        <!-- Grid 50 Independent Laravel Projects -->
        <div class="row g-3">
            <?php if (!empty($exercises)): ?>
                <?php foreach ($exercises as $ex): ?>
                    <?php 
                        $numStr = sprintf('%02d', $ex['num']);
                        $folderName = "Bai{$numStr}";
                        $projectUrl = "{$folderName}/public";
                        $dbName = $ex['db_name'];
                    ?>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="card card-project h-100 shadow-sm">
                            <div class="card-header bg-white border-0 pt-3 pb-0 d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary fs-6 px-2 py-1">
                                    ĐỀ SỐ <?= $numStr ?>
                                </span>
                                <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=<?= $dbName ?>" 
                                   target="_blank" class="badge-db text-decoration-none" title="Mở CSDL này trong phpMyAdmin">
                                    <i class="bi bi-database me-1"></i> <?= $dbName ?>
                                </a>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title fw-bold text-dark mb-2">
                                    <a href="<?= $projectUrl ?>" class="text-decoration-none text-dark hover-primary">
                                        <?= htmlspecialchars($ex['title']) ?>
                                    </a>
                                </h5>

                                <p class="card-text text-muted small mb-3" style="min-height: 44px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                    <?= htmlspecialchars($ex['desc']) ?>
                                </p>

                                <div class="d-flex flex-wrap gap-2 mb-2">
                                    <span class="badge-table" title="Bảng CSDL"><i class="bi bi-table me-1"></i> <?= $ex['table'] ?></span>
                                    <span class="badge bg-light text-secondary border" title="Model Eloquent"><i class="bi bi-cpu me-1"></i> <?= $ex['model'] ?></span>
                                    <span class="badge-folder" title="Thư mục độc lập"><i class="bi bi-folder2 me-1"></i> <?= $folderName ?>/</span>
                                </div>
                            </div>

                            <div class="card-footer bg-light border-0 py-2 d-flex justify-content-between align-items-center">
                                <a href="<?= $projectUrl ?>" class="btn btn-sm btn-primary fw-bold px-3">
                                    <i class="bi bi-play-circle-fill me-1"></i> Chạy bài này
                                </a>
                                <span class="badge bg-success-subtle text-success border border-success-subtle small py-1 px-2">
                                    <i class="bi bi-check2-all me-1"></i> Độc lập 100%
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <div class="text-muted fs-4 mb-2"><i class="bi bi-emoji-neutral"></i></div>
                    <h5 class="text-muted">Không tìm thấy bài tập nào phù hợp với từ khóa "<?= htmlspecialchars($search) ?>"</h5>
                    <a href="index.php" class="btn btn-outline-primary btn-sm mt-2">Xem tất cả 50 bài</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Modal Hướng dẫn nộp bài lẻ -->
    <div class="modal fade" id="modalGuide" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-bold"><i class="bi bi-info-circle-fill me-2"></i> Hướng Dẫn Nộp Bài Tập Lẻ (1 Trong 50 Bài)</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <h6 class="fw-bold text-dark">Khi bạn muốn nộp một bài cụ thể (Ví dụ Đề số 15):</h6>
                    <ol class="mb-3 ps-3">
                        <li class="mb-2">
                            Vào thư mục <code>C:\Users\Drago\Desktop\BaiTap\Bai15</code> (hoặc nén zip thư mục này).
                        </li>
                        <li class="mb-2">
                            Thư mục <code>Bai15</code> chứa đầy đủ mã nguồn Laravel chuẩn:
                            <ul>
                                <li><code>app/Http/Controllers/FeedbackController.php</code></li>
                                <li><code>app/Models/Feedback.php</code></li>
                                <li><code>database/migrations/2026_01_01_000000_create_feedbacks_table.php</code></li>
                                <li><code>resources/views/feedbacks/...</code></li>
                                <li><code>routes/web.php</code></li>
                                <li><code>.env.example</code> (Cấu hình CSDL: <code>db_bai15</code>)</li>
                                <li><code>composer.json</code>, <code>artisan</code></li>
                            </ul>
                        </li>
                        <li class="mb-2">
                            Bạn có thể gửi trực tiếp thư mục <code>Bai15</code> (hoặc file zip) cho giảng viên.
                        </li>
                        <li>
                            Khi giảng viên mở bài ra chấm, chỉ cần chạy:
                            <pre class="bg-light p-2 rounded mt-1"><code>composer install
copy .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve</code></pre>
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã hiểu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-top py-3 mt-auto">
        <div class="container-fluid px-4 d-flex flex-wrap justify-content-between align-items-center">
            <span class="text-muted small">
                <strong>Hệ Thống Ôn Tập Môn Thực Hành Laravel</strong> &copy; 2026. Chạy qua XAMPP & phpMyAdmin.
            </span>
            <div class="text-muted small">
                <span>50 Dự án độc lập <code>Bai01</code> &rarr; <code>Bai50</code></span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
