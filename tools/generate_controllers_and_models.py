# -*- coding: utf-8 -*-
import json, os

with open('storage/app/all_exercises_meta.json', encoding='utf-8') as f:
    exercises = json.load(f)

ctrl_dir = 'app/Http/Controllers/BaiTap'
model_dir = 'app/Models/BaiTap'
view_dir = 'resources/views/baitap'

os.makedirs(ctrl_dir, exist_ok=True)
os.makedirs(model_dir, exist_ok=True)
os.makedirs(view_dir, exist_ok=True)

for ex in exercises:
    num = ex['num']
    num_str = f"{num:02d}"
    title = ex['title']
    desc = ex['desc']
    model_name = ex['model']
    table_name = ex['table']
    db_name = ex['db_name']
    controller_name = f"Bai{num_str}Controller"
    model_class = f"Bai{num_str}{model_name}"

    # 1. Controller file: app/Http/Controllers/BaiTap/BaiXXController.php
    ctrl_content = f"""<?php

namespace App\Http\Controllers\BaiTap;

use App\Models\BaiTap\\{model_class};
use Illuminate\Http\Request;

/**
 * =========================================================================
 * ĐỀ SỐ {num}. {title}
 * =========================================================================
 * Mô tả: {desc}
 * Database riêng biệt (MySQL/phpMyAdmin): {db_name}
 * Bảng dữ liệu: {table_name}
 * Model Eloquent: {model_class}
 * Controller: {controller_name}
 * =========================================================================
 */
class {controller_name} extends BaseBaiTapController
{{
    protected $baiNum = {num};

    /**
     * Tên Model Eloquent liên kết
     */
    protected $modelClass = {model_class}::class;
}}
"""
    with open(os.path.join(ctrl_dir, f"{controller_name}.php"), 'w', encoding='utf-8') as f_ctrl:
        f_ctrl.write(ctrl_content)

    # 2. Model file: app/Models/BaiTap/BaiXXModel.php
    model_content = f"""<?php

namespace App\Models\BaiTap;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model cho Đề số {num}: {title}
 * Bảng: {table_name}
 * Database kết nối động: {db_name}
 */
class {model_class} extends Model
{{
    use HasFactory;

    protected $connection = 'dynamic_bai';
    protected $table = '{table_name}';
    protected $guarded = [];
}}
"""
    with open(os.path.join(model_dir, f"{model_class}.php"), 'w', encoding='utf-8') as f_model:
        f_model.write(model_content)

    # 3. View file riêng cho mỗi bài: resources/views/baitap/baiXX.blade.php
    # Giúp mỗi bài có đúng 1 file view riêng theo yêu cầu
    view_content = f"""{{--
    ĐỀ SỐ {num}. {title}
    Database riêng: {db_name} | Bảng: {table_name}
--}}
@extends('baitap.detail')
"""
    with open(os.path.join(view_dir, f"bai{num_str}.blade.php"), 'w', encoding='utf-8') as f_view:
        f_view.write(view_content)

print(f"Generated {len(exercises)} Controllers, Models, and Views successfully!")
