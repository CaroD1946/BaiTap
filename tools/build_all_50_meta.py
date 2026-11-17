import json, re

with open('de_summary.json', encoding='utf-8') as f:
    raw_data = json.load(f)

# Definitions of all 50 topics based on the PDFs
# We map each exam with precise schema, fields, validation, and sample records
configs = {
    1: {
        "model": "Post", "table": "posts",
        "fields": [
            {"name": "title", "label": "Tiêu đề bài viết", "type": "text", "rules": "required|string|min:5|max:255", "searchable": True},
            {"name": "category", "label": "Chuyên mục", "type": "select", "options": ["Thời sự", "Công nghệ", "Kinh tế", "Thể thao", "Giải trí"], "rules": "required|string", "filterable": True},
            {"name": "author", "label": "Tác giả", "type": "text", "rules": "required|string|max:100", "searchable": True},
            {"name": "content", "label": "Nội dung bài viết", "type": "textarea", "rules": "required|string|min:10"},
            {"name": "status", "label": "Trạng thái", "type": "select", "options": ["Bản nháp", "Đã xuất bản", "Chờ duyệt"], "rules": "required|string", "filterable": True},
            {"name": "published_at", "label": "Ngày đăng", "type": "date", "rules": "nullable|date"}
        ],
        "samples": [
            {"title": "Trí tuệ nhân tạo phát triển mạnh mẽ năm 2026", "category": "Công nghệ", "author": "Nguyễn Văn An", "content": "AI đang thay đổi toàn bộ các ngành công nghiệp từ y tế, giáo dục đến sản xuất.", "status": "Đã xuất bản", "published_at": "2026-11-10"},
            {"title": "Thị trường công nghệ xanh thu hút vốn đầu tư lớn", "category": "Kinh tế", "author": "Trần Thị Bình", "content": "Năng lượng tái tạo và xe điện dẫn đầu các dự án khởi nghiệp sáng tạo.", "status": "Đã xuất bản", "published_at": "2026-11-12"},
            {"title": "Đội tuyển trẻ giành cúp vô địch châu lục", "category": "Thể thao", "author": "Lê Hoàng", "content": "Chiến thắng thuyết phục với tỷ số 3-1 trong trận chung kết kịch tính.", "status": "Chờ duyệt", "published_at": "2026-11-15"}
        ]
    },
    2: {
        "model": "Product", "table": "products",
        "fields": [
            {"name": "product_code", "label": "Mã sản phẩm", "type": "text", "rules": "required|string|max:50", "searchable": True},
            {"name": "name", "label": "Tên sản phẩm", "type": "text", "rules": "required|string|min:3|max:200", "searchable": True},
            {"name": "category", "label": "Danh mục", "type": "select", "options": ["Điện thoại", "Laptop", "Phụ kiện", "Gia dụng"], "rules": "required|string", "filterable": True},
            {"name": "price", "label": "Giá bán (VNĐ)", "type": "number", "rules": "required|numeric|min:0"},
            {"name": "stock", "label": "Số lượng tồn", "type": "number", "rules": "required|integer|min:0", "filterable": True},
            {"name": "description", "label": "Mô tả sản phẩm", "type": "textarea", "rules": "nullable|string"}
        ],
        "samples": [
            {"product_code": "SP001", "name": "iPhone 15 Pro Max 256GB", "category": "Điện thoại", "price": 29990000, "stock": 15, "description": "Thiết kế titan cao cấp, chip A17 Pro mạnh mẽ."},
            {"product_code": "SP002", "name": "MacBook Air M3 16GB", "category": "Laptop", "price": 32500000, "stock": 8, "description": "Mỏng nhẹ, thời lượng pin lên đến 18 tiếng liên tục."},
            {"product_code": "SP003", "name": "Tai nghe AirPods Pro 2", "category": "Phụ kiện", "price": 5490000, "stock": 25, "description": "Chống ồn chủ động vượt trội, âm thanh vòm sống động."}
        ]
    },
    3: {
        "model": "Student", "table": "students",
        "fields": [
            {"name": "student_code", "label": "Mã sinh viên", "type": "text", "rules": "required|string|max:20", "searchable": True},
            {"name": "fullname", "label": "Họ và tên", "type": "text", "rules": "required|string|min:3|max:100", "searchable": True},
            {"name": "email", "label": "Địa chỉ Email", "type": "email", "rules": "required|email|max:150", "searchable": True},
            {"name": "birthdate", "label": "Ngày sinh", "type": "date", "rules": "required|date"},
            {"name": "class_name", "label": "Lớp học", "type": "select", "options": ["CNTT K15A", "CNTT K15B", "KTPM K15A", "HTTT K15A"], "rules": "required|string", "filterable": True},
            {"name": "gpa", "label": "Điểm trung bình (GPA)", "type": "number", "rules": "nullable|numeric|between:0,4"}
        ],
        "samples": [
            {"student_code": "SV2026001", "fullname": "Nguyễn Hoàng Nam", "email": "nam.nh@student.edu.vn", "birthdate": "2004-05-14", "class_name": "CNTT K15A", "gpa": 3.65},
            {"student_code": "SV2026002", "fullname": "Phạm Mai Phương", "email": "phuong.pm@student.edu.vn", "birthdate": "2004-09-22", "class_name": "KTPM K15A", "gpa": 3.82},
            {"student_code": "SV2026003", "fullname": "Trần Quốc Bảo", "email": "bao.tq@student.edu.vn", "birthdate": "2003-12-08", "class_name": "CNTT K15B", "gpa": 3.20}
        ]
    },
    4: {
        "model": "Book", "table": "books",
        "fields": [
            {"name": "book_code", "label": "Mã sách", "type": "text", "rules": "required|string|max:30", "searchable": True},
            {"name": "title", "label": "Tên sách", "type": "text", "rules": "required|string|min:2|max:200", "searchable": True},
            {"name": "author", "label": "Tác giả", "type": "text", "rules": "required|string|max:150", "searchable": True},
            {"name": "publisher", "label": "Nhà xuất bản", "type": "text", "rules": "nullable|string|max:150"},
            {"name": "publish_year", "label": "Năm xuất bản", "type": "number", "rules": "required|integer|min:1900|max:2026", "filterable": True},
            {"name": "quantity", "label": "Số lượng sách", "type": "number", "rules": "required|integer|min:0"}
        ],
        "samples": [
            {"book_code": "BK-001", "title": "Lập trình Web với Laravel chuyên sâu", "author": "Taylor Otwell", "publisher": "NXB Thông Tin", "publish_year": 2024, "quantity": 12},
            {"book_code": "BK-002", "title": "Clean Code - Nghệ thuật viết code sạch", "author": "Robert C. Martin", "publisher": "NXB Khoa Học", "publish_year": 2023, "quantity": 8},
            {"book_code": "BK-003", "title": "Thiết kế kiến trúc hệ thống phân tán", "author": "Martin Fowler", "publisher": "NXB Trẻ", "publish_year": 2025, "quantity": 15}
        ]
    },
    5: {
        "model": "Order", "table": "orders",
        "fields": [
            {"name": "order_code", "label": "Mã đơn hàng", "type": "text", "rules": "required|string|max:50", "searchable": True},
            {"name": "customer_name", "label": "Tên khách hàng", "type": "text", "rules": "required|string|max:150", "searchable": True},
            {"name": "shipping_address", "label": "Địa chỉ giao hàng", "type": "text", "rules": "required|string|max:255"},
            {"name": "total_amount", "label": "Tổng tiền (VNĐ)", "type": "number", "rules": "required|numeric|min:0"},
            {"name": "status", "label": "Trạng thái đơn", "type": "select", "options": ["Chờ xử lý", "Đang giao hàng", "Đã hoàn thành", "Đã hủy"], "rules": "required|string", "filterable": True},
            {"name": "order_date", "label": "Ngày đặt", "type": "date", "rules": "required|date"}
        ],
        "samples": [
            {"order_code": "DH20261101", "customer_name": "Lê Văn Hùng", "shipping_address": "123 Lê Lợi, Quận 1, TP.HCM", "total_amount": 2500000, "status": "Chờ xử lý", "order_date": "2026-11-15"},
            {"order_code": "DH20261102", "customer_name": "Nguyễn Thị Thảo", "shipping_address": "456 Kim Mã, Ba Đình, Hà Nội", "total_amount": 4800000, "status": "Đang giao hàng", "order_date": "2026-11-16"},
            {"order_code": "DH20261103", "customer_name": "Trương Minh Tuấn", "shipping_address": "78 Hùng Vương, Hải Châu, Đà Nẵng", "total_amount": 1200000, "status": "Đã hoàn thành", "order_date": "2026-11-14"}
        ]
    }
}

print("Base configs defined. Writing automated builder for all 50...")
