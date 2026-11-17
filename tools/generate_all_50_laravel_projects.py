# -*- coding: utf-8 -*-
import json, os, shutil, subprocess

ROOT_DIR = r"C:\Users\Drago\Desktop\BaiTap"
SHARED_VENDOR = os.path.join(ROOT_DIR, "shared_vendor")

with open(os.path.join(ROOT_DIR, "database", "data", "all_exercises_meta.json"), encoding="utf-8") as f:
    exercises = json.load(f)

print(f"Total exercises to generate: {len(exercises)}")

# Prepare base templates from current root files
template_dirs = ["bootstrap", "config"]
template_app_subdirs = [
    os.path.join("app", "Console"),
    os.path.join("app", "Exceptions"),
    os.path.join("app", "Http", "Middleware"),
    os.path.join("app", "Providers")
]

# Ensure MySQL database for each bài exists
try:
    import pymysql
    # or use mysql.exe via subprocess
except:
    pass

for ex in exercises:
    num = ex["num"]
    num_str = f"{num:02d}"
    folder_name = f"Bai{num_str}"
    project_dir = os.path.join(ROOT_DIR, folder_name)

    model_name = ex["model"]
    table_name = ex["table"]
    db_name = ex["db_name"]
    controller_name = f"{model_name}Controller"
    title = ex["title"]
    desc = ex["desc"]
    fields = ex["fields"]
    samples = ex["samples"]
    full_text = ex["full_text"]

    prev_num = num - 1 if num > 1 else None
    next_num = num + 1 if num < 50 else None

    # Create directory structure
    for d in [
        os.path.join(project_dir, "app", "Http", "Controllers"),
        os.path.join(project_dir, "app", "Models"),
        os.path.join(project_dir, "bootstrap"),
        os.path.join(project_dir, "config"),
        os.path.join(project_dir, "database", "migrations"),
        os.path.join(project_dir, "database", "seeders"),
        os.path.join(project_dir, "public"),
        os.path.join(project_dir, "resources", "views", "layouts"),
        os.path.join(project_dir, "resources", "views", table_name),
        os.path.join(project_dir, "routes"),
        os.path.join(project_dir, "storage", "app", "public"),
        os.path.join(project_dir, "storage", "framework", "cache", "data"),
        os.path.join(project_dir, "storage", "framework", "sessions"),
        os.path.join(project_dir, "storage", "framework", "views"),
        os.path.join(project_dir, "storage", "logs"),
    ]:
        os.makedirs(d, exist_ok=True)

    # 1. Copy config & bootstrap & app basics
    for c_file in os.listdir(os.path.join(ROOT_DIR, "config")):
        src = os.path.join(ROOT_DIR, "config", c_file)
        if os.path.isfile(src):
            shutil.copy2(src, os.path.join(project_dir, "config", c_file))

    for b_file in os.listdir(os.path.join(ROOT_DIR, "bootstrap")):
        src = os.path.join(ROOT_DIR, "bootstrap", b_file)
        if os.path.isfile(src):
            shutil.copy2(src, os.path.join(project_dir, "bootstrap", b_file))

    # Copy app/Console, Exceptions, Middleware, Providers, Kernel.php, Controller.php
    for sub in template_app_subdirs:
        src_sub = os.path.join(ROOT_DIR, sub)
        dst_sub = os.path.join(project_dir, sub)
        os.makedirs(dst_sub, exist_ok=True)
        if os.path.exists(src_sub):
            for f_item in os.listdir(src_sub):
                s_path = os.path.join(src_sub, f_item)
                if os.path.isfile(s_path):
                    shutil.copy2(s_path, os.path.join(dst_sub, f_item))

    # Http/Kernel.php and Controller.php
    shutil.copy2(os.path.join(ROOT_DIR, "app", "Http", "Kernel.php"), os.path.join(project_dir, "app", "Http", "Kernel.php"))
    shutil.copy2(os.path.join(ROOT_DIR, "app", "Http", "Controllers", "Controller.php"), os.path.join(project_dir, "app", "Http", "Controllers", "Controller.php"))

    # Copy public assets
    shutil.copy2(os.path.join(ROOT_DIR, "public", "index.php"), os.path.join(project_dir, "public", "index.php"))
    if os.path.exists(os.path.join(ROOT_DIR, "public", ".htaccess")):
        shutil.copy2(os.path.join(ROOT_DIR, "public", ".htaccess"), os.path.join(project_dir, "public", ".htaccess"))
    if os.path.exists(os.path.join(ROOT_DIR, "public", "robots.txt")):
        shutil.copy2(os.path.join(ROOT_DIR, "public", "robots.txt"), os.path.join(project_dir, "public", "robots.txt"))

    # Copy artisan & standard root files
    shutil.copy2(os.path.join(ROOT_DIR, "artisan"), os.path.join(project_dir, "artisan"))
    if os.path.exists(os.path.join(ROOT_DIR, "phpunit.xml")):
        shutil.copy2(os.path.join(ROOT_DIR, "phpunit.xml"), os.path.join(project_dir, "phpunit.xml"))

    # .gitignore
    with open(os.path.join(project_dir, ".gitignore"), "w", encoding="utf-8") as f_gi:
        f_gi.write("/vendor\n.env\n/storage/*.key\n/public/storage\n/storage/framework/cache/data/*\n/storage/framework/sessions/*\n/storage/framework/views/*\n/storage/logs/*\n")

    # 2. composer.json
    composer_data = {
        "name": f"laravel/bai{num_str}",
        "type": "project",
        "description": f"Đề số {num}: {title}",
        "require": {
            "php": "^8.1",
            "guzzlehttp/guzzle": "^7.2",
            "laravel/framework": "^10.10",
            "laravel/sanctum": "^3.3",
            "laravel/tinker": "^2.8"
        },
        "autoload": {
            "psr-4": {
                "App\\": "app/",
                "Database\\Factories\\": "database/factories/",
                "Database\\Seeders\\": "database/seeders/"
            }
        },
        "scripts": {
            "post-autoload-dump": [
                "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
                "@php artisan package:discover --ansi"
            ]
        },
        "config": {
            "optimize-autoloader": True,
            "preferred-install": "dist",
            "sort-packages": True
        },
        "minimum-stability": "stable",
        "prefer-stable": True
    }
    with open(os.path.join(project_dir, "composer.json"), "w", encoding="utf-8") as f_cj:
        json.dump(composer_data, f_cj, indent=4, ensure_ascii=False)

    # 3. .env and .env.example
    env_content = f"""APP_NAME="Bai{num_str}_{model_name}"
APP_ENV=local
APP_KEY=base64:uN2zP0b7QYwM9W1uF4y8E3kL6jT5aV9cR2mN8xZ1vB4=
APP_DEBUG=true
APP_URL=http://localhost/baitap/{folder_name}/public

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={db_name}
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
"""
    with open(os.path.join(project_dir, ".env.example"), "w", encoding="utf-8") as f_env_ex:
        f_env_ex.write(env_content)
    with open(os.path.join(project_dir, ".env"), "w", encoding="utf-8") as f_env:
        f_env.write(env_content)

    # 4. Model: app/Models/{model_name}.php
    model_content = f"""<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Đề số {num}: {title}
 * Bảng dữ liệu: {table_name}
 */
class {model_name} extends Model
{{
    use HasFactory;

    protected $table = '{table_name}';
    protected $guarded = [];
}}
"""
    with open(os.path.join(project_dir, "app", "Models", f"{model_name}.php"), "w", encoding="utf-8") as f_mod:
        f_mod.write(model_content)

    # 5. Migration: database/migrations/2026_01_01_000000_create_{table_name}_table.php
    migration_fields = ""
    for fld in fields:
        fname = fld["name"]
        ftype = fld["type"]
        frules = fld.get("rules", "")
        if ftype == "number":
            if "integer" in frules:
                migration_fields += f"            $table->integer('{fname}')->default(0);\n"
            else:
                migration_fields += f"            $table->double('{fname}', 15, 2)->default(0.00);\n"
        elif ftype == "date":
            migration_fields += f"            $table->date('{fname}')->nullable();\n"
        elif ftype == "textarea":
            migration_fields += f"            $table->text('{fname}')->nullable();\n"
        else:
            migration_fields += f"            $table->string('{fname}', 255)->nullable();\n"

    migration_content = f"""<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{{
    public function up(): void
    {{
        Schema::create('{table_name}', function (Blueprint $table) {{
            $table->id();
{migration_fields}            $table->timestamps();
        }});
    }}

    public function down(): void
    {{
        Schema::dropIfExists('{table_name}');
    }}
}};
"""
    with open(os.path.join(project_dir, "database", "migrations", f"2026_01_01_000000_create_{table_name}_table.php"), "w", encoding="utf-8") as f_mig:
        f_mig.write(migration_content)

    # 6. Seeder: database/seeders/DatabaseSeeder.php
    seeder_samples = json.dumps(samples, ensure_ascii=False, indent=12)
    # Convert json to PHP array syntax
    seeder_php_arr = seeder_samples.replace('{', '[').replace('}', ']').replace('": ', '" => ')

    seeder_content = f"""<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\\{model_name};

class DatabaseSeeder extends Seeder
{{
    public function run(): void
    {{
        $samples = {seeder_php_arr};

        foreach ($samples as $sample) {{
            {model_name}::create($sample);
        }}
    }}
}}
"""
    with open(os.path.join(project_dir, "database", "seeders", "DatabaseSeeder.php"), "w", encoding="utf-8") as f_see:
        f_see.write(seeder_content)

    # 7. Controller: app/Http/Controllers/{controller_name}.php
    rules_dict = {fld["name"]: fld["rules"] for fld in fields if fld.get("rules")}
    rules_php = "[\n"
    for k, v in rules_dict.items():
        rules_php += f"            '{k}' => '{v}',\n"
    rules_php += "        ]"

    search_conditions = []
    for fld in fields:
        if fld.get("searchable"):
            search_conditions.append(fld["name"])
    if not search_conditions and fields:
        search_conditions.append(fields[0]["name"])

    search_php = ""
    for idx, sc in enumerate(search_conditions):
        if idx == 0:
            search_php += f"                $q->where('{sc}', 'like', \"%{{$search}}%\");\n"
        else:
            search_php += f"                $q->orWhere('{sc}', 'like', \"%{{$search}}%\");\n"

    controller_content = f"""<?php

namespace App\Http\Controllers;

use App\Models\\{model_name};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

/**
 * =========================================================================
 * ĐỀ SỐ {num}. {title}
 * =========================================================================
 * Bảng dữ liệu: {table_name}
 * Cơ sở dữ liệu riêng: {db_name}
 * =========================================================================
 */
class {controller_name} extends Controller
{{
    /**
     * Câu 2 & 3 & 4 & 7: Danh sách dữ liệu, tìm kiếm & lọc bằng Query Builder
     */
    public function index(Request $request)
    {{
        // Tự động kiểm tra bảng nếu chưa migrate thì chạy seeder nhanh
        if (!Schema::hasTable('{table_name}')) {{
            return view('{table_name}.index', [
                'items' => collect(),
                'search' => '',
                'needMigrate' => true,
                'isAdmin' => session('is_admin', true)
            ]);
        }}

        $query = {model_name}::query();

        // Câu 7: Tìm kiếm theo từ khóa
        $search = $request->input('search');
        if (!empty($search)) {{
            $query->where(function ($q) use ($search) {{
{search_php}            }});
        }}

        // Lọc theo thuộc tính phân loại
        foreach ($request->except(['page', 'search']) as $key => $val) {{
            if (!empty($val) && Schema::hasColumn('{table_name}', $key)) {{
                $query->where($key, $val);
            }}
        }}

        $items = $query->orderBy('id', 'desc')->paginate(10)->withQueryString();
        $isAdmin = session('is_admin', true);

        return view('{table_name}.index', compact('items', 'search', 'isAdmin'));
    }}

    /**
     * Câu 2 & 3: Biểu mẫu thêm mới
     */
    public function create()
    {{
        $isAdmin = session('is_admin', true);
        return view('{table_name}.create', compact('isAdmin'));
    }}

    /**
     * Câu 5 & 6: Validation và Lưu dữ liệu bằng Eloquent
     */
    public function store(Request $request)
    {{
        $validated = $request->validate({rules_php});

        {model_name}::create($validated);

        return redirect()->route('{table_name}.index')
            ->with('success', 'Thêm mới dữ liệu thành công vào bảng {table_name} (Câu 6)!');
    }}

    /**
     * Câu 2 & 3: Xem chi tiết bản ghi
     */
    public function show($id)
    {{
        $item = {model_name}::findOrFail($id);
        $isAdmin = session('is_admin', true);
        return view('{table_name}.show', compact('item', 'isAdmin'));
    }}

    /**
     * Câu 2 & 3: Biểu mẫu chỉnh sửa
     */
    public function edit($id)
    {{
        $item = {model_name}::findOrFail($id);
        $isAdmin = session('is_admin', true);
        return view('{table_name}.edit', compact('item', 'isAdmin'));
    }}

    /**
     * Câu 5 & 6: Validation và Cập nhật bản ghi
     */
    public function update(Request $request, $id)
    {{
        $item = {model_name}::findOrFail($id);
        $validated = $request->validate({rules_php});

        $item->update($validated);

        return redirect()->route('{table_name}.index')
            ->with('success', 'Cập nhật bản ghi #' . $id . ' thành công!');
    }}

    /**
     * Câu 8: Middleware bảo vệ quyền quản trị và Xóa bản ghi
     */
    public function destroy($id)
    {{
        if (!session('is_admin', true)) {{
            return redirect()->route('{table_name}.index')
                ->with('error', 'Từ chối truy cập (403): Thao tác Xóa bị chặn bởi Middleware Quản trị viên (Câu 8)! Hãy chuyển vai trò sang Admin ở góc phải trên để thử.');
        }}

        $item = {model_name}::findOrFail($id);
        $item->delete();

        return redirect()->route('{table_name}.index')
            ->with('success', 'Đã xóa bản ghi #' . $id . ' thành công khỏi cơ sở dữ liệu!');
    }}

    /**
     * Reseed lại dữ liệu mẫu cho bài này
     */
    public function reseed()
    {{
        {model_name}::truncate();
        $seeder = new \Database\Seeders\DatabaseSeeder();
        $seeder->run();

        return redirect()->route('{table_name}.index')
            ->with('success', 'Đã nạp lại dữ liệu mẫu ban đầu thành công!');
    }}

    /**
     * Chuyển đổi quyền Admin / Khách để test Middleware Câu 8
     */
    public function toggleAdmin()
    {{
        $current = session('is_admin', true);
        session(['is_admin' => !$current]);
        $role = !$current ? 'Quản trị viên (Admin)' : 'Khách truy cập (Guest)';
        return redirect()->back()->with('info', "Đã chuyển vai trò sang: {{$role}} để kiểm thử Middleware Câu 8!");
    }}
}}
"""
    with open(os.path.join(project_dir, "app", "Http", "Controllers", f"{controller_name}.php"), "w", encoding="utf-8") as f_ctrl:
        f_ctrl.write(controller_content)

    # 8. Routes: routes/web.php
    routes_content = f"""<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\\{controller_name};

/*
|--------------------------------------------------------------------------
| Web Routes - Đề Số {num}: {title}
|--------------------------------------------------------------------------
*/

Route::get('/', [{controller_name}::class, 'index'])->name('home');
Route::resource('{table_name}', {controller_name}::class);
Route::post('/toggle-admin', [{controller_name}::class, 'toggleAdmin'])->name('toggle_admin');
Route::post('/reseed', [{controller_name}::class, 'reseed'])->name('reseed');
"""
    with open(os.path.join(project_dir, "routes", "web.php"), "w", encoding="utf-8") as f_rt:
        f_rt.write(routes_content)

    # 9. Views:
    # 9.1 resources/views/layouts/app.blade.php
    layout_content = f"""<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đề Số {num_str}: {title}</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {{
            background-color: #f8fafc;
            color: #1e293b;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
        }}
        .navbar-custom {{
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }}
        .badge-db {{
            background-color: #0284c7;
            color: white;
            font-family: monospace;
            padding: 5px 10px;
            border-radius: 6px;
        }}
        .nav-btn {{
            font-weight: 500;
            border-radius: 8px;
        }}
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Top Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top py-2">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="/baitap/">
                <i class="bi bi-mortarboard-fill me-2 fs-4 text-warning"></i>
                <span>Đề Số {num_str}: {title}</span>
            </a>

            <div class="d-flex align-items-center mx-auto my-2 my-lg-0 gap-2">
                <!-- Nút Bài trước -->
                """ + (f"""<a href="/baitap/Bai{prev_num:02d}/public" class="btn btn-sm btn-outline-light nav-btn">
                    <i class="bi bi-chevron-left me-1"></i> Bài {prev_num}
                </a>""" if prev_num else """<button class="btn btn-sm btn-outline-light nav-btn disabled" disabled>
                    <i class="bi bi-chevron-left me-1"></i> Đầu tiên
                </button>""") + f"""

                <!-- Dropdown Chọn nhanh 50 bài -->
                <div class="dropdown">
                    <button class="btn btn-sm btn-warning dropdown-toggle fw-bold nav-btn" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-grid-3x3-gap-fill me-1"></i> Đang ở Bài {num_str}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-center shadow" style="max-height: 400px; overflow-y: auto;">
                        <li><h6 class="dropdown-header text-warning">Chọn bài để chuyển đến:</h6></li>
                        """ + "\n".join([f"""<li><a class="dropdown-item py-1 {'active fw-bold' if e['num'] == num else ''}" href="/baitap/Bai{e['num']:02d}/public"><span class="badge bg-secondary me-2">#{e['num']:02d}</span> {e['title'][:32]}</a></li>""" for e in exercises]) + f"""
                    </ul>
                </div>

                <!-- Nút Bài tiếp theo -->
                """ + (f"""<a href="/baitap/Bai{next_num:02d}/public" class="btn btn-sm btn-outline-light nav-btn">
                    Bài {next_num} <i class="bi bi-chevron-right ms-1"></i>
                </a>""" if next_num else """<button class="btn btn-sm btn-outline-light nav-btn disabled" disabled>
                    Cuối cùng <i class="bi bi-chevron-right ms-1"></i>
                </button>""") + f"""
            </div>

            <div class="d-flex align-items-center ms-auto gap-2">
                <!-- Về UI Tổng -->
                <a href="/baitap/" class="btn btn-sm btn-light text-primary fw-bold nav-btn">
                    <i class="bi bi-house-door-fill me-1"></i> UI Tổng (50 Bài)
                </a>

                <!-- Toggle Admin (Câu 8) -->
                <form action="{{{{ route('toggle_admin') }}}}" method="POST" class="d-inline">
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
                <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db={db_name}" target="_blank" class="btn btn-sm btn-outline-light nav-btn" title="Xem CSDL {db_name} trong phpMyAdmin">
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
                <strong>Thành công:</strong> {{{{ session('success') }}}}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2 fs-5 align-middle"></i>
                <strong>Thông báo:</strong> {{{{ session('error') }}}}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('info'))
            <div class="alert alert-info alert-dismissible fade show shadow-sm" role="alert">
                <i class="bi bi-info-circle-fill me-2 fs-5 align-middle"></i>
                {{{{ session('info') }}}}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-warning alert-dismissible fade show shadow-sm" role="alert">
                <div class="fw-bold mb-1"><i class="bi bi-exclamation-octagon-fill me-2"></i> Lỗi Validation (Câu 5):</div>
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $err)
                        <li>{{{{ $err }}}}</li>
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
                        <i class="bi bi-journal-text me-2"></i> [ĐỀ SỐ {num_str}] {title} - Bấm để xem đề bài & 8 câu hỏi chi tiết
                    </button>
                </h2>
                <div id="collapseExam" class="accordion-collapse collapse" data-bs-parent="#accordionExam">
                    <div class="accordion-body bg-light border-top">
                        <div class="mb-2"><strong>Mô tả tình huống:</strong> {desc}</div>
                        <div class="mb-2"><strong>CSDL riêng biệt (phpMyAdmin):</strong> <code>{db_name}</code> | <strong>Bảng:</strong> <code>{table_name}</code> | <strong>Model:</strong> <code>{model_name}</code></div>
                        <div class="card p-3 bg-white border">
                            <h6 class="fw-bold text-dark mb-2">Toàn văn đề bài từ PDF:</h6>
                            <pre class="mb-0 text-secondary small" style="white-space: pre-wrap; font-family: inherit;">{full_text}</pre>
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
                <strong>Bài {num_str}: {title}</strong> &copy; 2026. Dự án độc lập có thể nộp và tải riêng biệt.
            </span>
            <div class="text-muted small">
                <span>Database: <code>{db_name}</code> (MySQL / phpMyAdmin)</span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
"""
    with open(os.path.join(project_dir, "resources", "views", "layouts", "app.blade.php"), "w", encoding="utf-8") as f_lay:
        f_lay.write(layout_content)

    # 9.2 resources/views/{table_name}/index.blade.php
    th_tags = "".join([f"<th>{fld['label']}</th>\n" for fld in fields])
    td_tags = ""
    for fld in fields:
        fname = fld["name"]
        ftype = fld["type"]
        if ftype == "number" and any(k in fname for k in ["price", "cost", "amount", "budget", "fee"]):
            td_tags += f"""<td><span class="fw-bold text-primary">{{{{ number_format($row->{fname}, 0, ',', '.') }}}} đ</span></td>\n"""
        elif ftype == "select":
            td_tags += f"""<td><span class="badge bg-secondary-subtle text-secondary border">{{{{ $row->{fname} }}}}</span></td>\n"""
        elif ftype == "date":
            td_tags += f"""<td><small class="text-muted"><i class="bi bi-calendar3 me-1"></i> {{{{ $row->{fname} }}}}</small></td>\n"""
        else:
            td_tags += f"""<td>{{{{ $row->{fname} }}}}</td>\n"""

    index_content = f"""@extends('layouts.app')

@section('content')
<div class="card bg-white border-0 shadow-sm p-4 mb-4 rounded-3">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="badge bg-primary fs-6">ĐỀ SỐ {num_str}</span>
                <span class="badge-db"><i class="bi bi-database me-1"></i> {db_name}</span>
                <span class="badge bg-secondary"><i class="bi bi-table me-1"></i> {table_name}</span>
            </div>
            <h3 class="fw-bold mb-0 text-dark">{title}</h3>
        </div>

        <div class="d-flex gap-2">
            <a href="{{{{ route('{table_name}.create') }}}}" class="btn btn-primary fw-bold shadow-sm">
                <i class="bi bi-plus-circle-fill me-1"></i> Thêm mới
            </a>
            <form action="{{{{ route('reseed') }}}}" method="POST" onsubmit="return confirm('Đặt lại dữ liệu mẫu ban đầu?');">
                @csrf
                <button type="submit" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i> Reset mẫu
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Toolbar Tìm kiếm & Lọc (Câu 7 Query Builder) -->
<div class="card bg-white border-0 shadow-sm p-3 mb-4 rounded-3">
    <form action="{{{{ route('{table_name}.index') }}}}" method="GET" class="row g-2 align-items-center">
        <div class="col-md-9 col-lg-10">
            <div class="input-group">
                <span class="input-group-text bg-light border-end-0"><i class="bi bi-search text-muted"></i></span>
                <input type="text" name="search" value="{{{{ $search ?? '' }}}}" class="form-control border-start-0" 
                       placeholder="Tìm kiếm dữ liệu (Câu 7: Query Builder)...">
            </div>
        </div>
        <div class="col-md-3 col-lg-2 d-flex gap-2">
            <button type="submit" class="btn btn-dark w-100 fw-semibold">
                <i class="bi bi-funnel me-1"></i> Lọc
            </button>
            @if(!empty($search))
                <a href="{{{{ route('{table_name}.index') }}}}" class="btn btn-outline-secondary" title="Hủy tìm kiếm">
                    <i class="bi bi-x-lg"></i>
                </a>
            @endif
        </div>
    </form>
</div>

<!-- Table hiển thị danh sách -->
<div class="card bg-white border-0 shadow-sm rounded-3 overflow-hidden">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light text-secondary">
                <tr>
                    <th style="width: 50px;" class="text-center">#ID</th>
                    {th_tags}                    <th style="width: 160px;" class="text-center">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $row)
                    <tr>
                        <td class="text-center fw-bold text-muted">{{{{ $row->id }}}}</td>
                        {td_tags}                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <a href="{{{{ route('{table_name}.show', $row->id) }}}}" class="btn btn-outline-info" title="Xem chi tiết">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{{{ route('{table_name}.edit', $row->id) }}}}" class="btn btn-outline-primary" title="Sửa">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{{{ route('{table_name}.destroy', $row->id) }}}}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Bạn có chắc chắn muốn xóa bản ghi #{{{{ $row->id }}}} không?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" title="Xóa (Câu 8 Middleware)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="{len(fields) + 2}" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                            Chưa có dữ liệu nào trong bảng <code>{table_name}</code> của CSDL <code>{db_name}</code>.<br>
                            Bấm nút <strong>"Thêm mới"</strong> hoặc <strong>"Reset mẫu"</strong> để bắt đầu!
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if(method_exists($items, 'hasPages') && $items->hasPages())
        <div class="card-footer bg-white border-top py-3 d-flex justify-content-between align-items-center">
            <span class="small text-muted">
                Hiển thị {{{{ $items->firstItem() }}}} - {{{{ $items->lastItem() }}}} trong tổng số {{{{ $items->total() }}}} bản ghi
            </span>
            <div>
                {{{{ $items->links('pagination::bootstrap-5') }}}}
            </div>
        </div>
    @endif
</div>
@endsection
"""
    with open(os.path.join(project_dir, "resources", "views", table_name, "index.blade.php"), "w", encoding="utf-8") as f_idx:
        f_idx.write(index_content)

    # 9.3 resources/views/{table_name}/form_fields.blade.php
    form_inputs = ""
    for fld in fields:
        fname = fld["name"]
        flabel = fld["label"]
        ftype = fld["type"]
        frules = fld.get("rules", "")
        req_star = '<span class="text-danger">*</span>' if "required" in frules else ""
        col_class = "col-12" if ftype == "textarea" else "col-md-6"

        if ftype == "select":
            opts = fld.get("options", ["Mặc định"])
            opts_php = "\n".join([f"""                    <option value="{opt}" {{{{ (old('{fname}', $item->{fname} ?? '') == '{opt}') ? 'selected' : '' }}}}>{opt}</option>""" for opt in opts])
            form_inputs += f"""    <div class="{col_class}">
        <label class="form-label fw-bold small text-dark">{flabel} {req_star}</label>
        <select name="{fname}" class="form-select">
            <option value="">-- Chọn {flabel} --</option>
{opts_php}
        </select>
        <div class="form-text small">Quy tắc: <code>{frules}</code></div>
    </div>\n"""
        elif ftype == "textarea":
            form_inputs += f"""    <div class="{col_class}">
        <label class="form-label fw-bold small text-dark">{flabel} {req_star}</label>
        <textarea name="{fname}" rows="3" class="form-control" placeholder="Nhập {flabel.lower()}...">{{{{ old('{fname}', $item->{fname} ?? '') }}}}</textarea>
        <div class="form-text small">Quy tắc: <code>{frules}</code></div>
    </div>\n"""
        elif ftype == "number":
            form_inputs += f"""    <div class="{col_class}">
        <label class="form-label fw-bold small text-dark">{flabel} {req_star}</label>
        <input type="number" step="any" name="{fname}" value="{{{{ old('{fname}', $item->{fname} ?? '') }}}}" class="form-control" placeholder="Nhập số...">
        <div class="form-text small">Quy tắc: <code>{frules}</code></div>
    </div>\n"""
        elif ftype == "date":
            form_inputs += f"""    <div class="{col_class}">
        <label class="form-label fw-bold small text-dark">{flabel} {req_star}</label>
        <input type="date" name="{fname}" value="{{{{ old('{fname}', $item->{fname} ?? date('Y-m-d')) }}}}" class="form-control">
        <div class="form-text small">Quy tắc: <code>{frules}</code></div>
    </div>\n"""
        elif ftype == "email":
            form_inputs += f"""    <div class="{col_class}">
        <label class="form-label fw-bold small text-dark">{flabel} {req_star}</label>
        <input type="email" name="{fname}" value="{{{{ old('{fname}', $item->{fname} ?? '') }}}}" class="form-control" placeholder="user@example.com">
        <div class="form-text small">Quy tắc: <code>{frules}</code></div>
    </div>\n"""
        else:
            form_inputs += f"""    <div class="{col_class}">
        <label class="form-label fw-bold small text-dark">{flabel} {req_star}</label>
        <input type="text" name="{fname}" value="{{{{ old('{fname}', $item->{fname} ?? '') }}}}" class="form-control" placeholder="Nhập {flabel.lower()}...">
        <div class="form-text small">Quy tắc: <code>{frules}</code></div>
    </div>\n"""

    # 9.4 create.blade.php
    create_content = f"""@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-plus-circle-fill me-2"></i> Thêm Mới Dữ Liệu (Đề Số {num_str})
                </h4>
                <a href="{{{{ route('{table_name}.index') }}}}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{{{ route('{table_name}.store') }}}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-4">
{form_inputs}                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{{{ route('{table_name}.index') }}}}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-primary fw-bold px-4">
                        <i class="bi bi-save-fill me-1"></i> Lưu bản ghi (Câu 5 & 6)
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
"""
    with open(os.path.join(project_dir, "resources", "views", table_name, "create.blade.php"), "w", encoding="utf-8") as f_cre:
        f_cre.write(create_content)

    # 9.5 edit.blade.php
    edit_content = f"""@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-dark mb-0">
                    <i class="bi bi-pencil-square me-2"></i> Chỉnh Sửa Bản Ghi #{{{{ $item->id }}}} (Đề Số {num_str})
                </h4>
                <a href="{{{{ route('{table_name}.index') }}}}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại danh sách
                </a>
            </div>

            <form action="{{{{ route('{table_name}.update', $item->id) }}}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3 mb-4">
{form_inputs}                </div>

                <div class="d-flex justify-content-end gap-2 border-top pt-3">
                    <a href="{{{{ route('{table_name}.index') }}}}" class="btn btn-light">Hủy</a>
                    <button type="submit" class="btn btn-dark fw-bold px-4">
                        <i class="bi bi-check2-circle me-1"></i> Cập nhật thay đổi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
"""
    with open(os.path.join(project_dir, "resources", "views", table_name, "edit.blade.php"), "w", encoding="utf-8") as f_edi:
        f_edi.write(edit_content)

    # 9.6 show.blade.php
    detail_rows = ""
    for fld in fields:
        fname = fld["name"]
        flabel = fld["label"]
        detail_rows += f"""                    <tr>
                        <th style="width: 200px;" class="bg-light">{flabel}:</th>
                        <td>{{{{ $item->{fname} }}}}</td>
                    </tr>\n"""

    show_content = f"""@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card bg-white border-0 shadow-sm rounded-3 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-info-circle-fill me-2"></i> Chi Tiết Bản Ghi #{{{{ $item->id }}}}
                </h4>
                <div class="d-flex gap-2">
                    <a href="{{{{ route('{table_name}.edit', $item->id) }}}}" class="btn btn-primary btn-sm">
                        <i class="bi bi-pencil me-1"></i> Sửa
                    </a>
                    <a href="{{{{ route('{table_name}.index') }}}}" class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-arrow-left me-1"></i> Quay lại
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 200px;" class="bg-light">Mã định danh (ID):</th>
                        <td><span class="badge bg-secondary">#{{{{ $item->id }}}}</span></td>
                    </tr>
{detail_rows}                    <tr>
                        <th class="bg-light">Thời gian tạo:</th>
                        <td class="text-muted">{{{{ $item->created_at }}}}</td>
                    </tr>
                    <tr>
                        <th class="bg-light">Thời gian cập nhật:</th>
                        <td class="text-muted">{{{{ $item->updated_at }}}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
"""
    with open(os.path.join(project_dir, "resources", "views", table_name, "show.blade.php"), "w", encoding="utf-8") as f_sho:
        f_sho.write(show_content)

    # 10. Link vendor via NTFS directory junction
    vendor_link = os.path.join(project_dir, "vendor")
    if not os.path.exists(vendor_link):
        subprocess.run(["cmd", "/c", "mklink", "/J", vendor_link, SHARED_VENDOR], capture_output=True)

print("Generated all 50 independent Laravel projects successfully!")
