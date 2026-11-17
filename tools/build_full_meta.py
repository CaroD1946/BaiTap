# -*- coding: utf-8 -*-
import json, re

with open('de_summary.json', encoding='utf-8') as f:
    raw_exams = json.load(f)

# Comprehensive dictionary of schemas and sample data for each of the 50 exams
defs = [
    # 01
    {
        "num": 1, "model": "Post", "table": "posts",
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
    # 02
    {
        "num": 2, "model": "Product", "table": "products",
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
    # 03
    {
        "num": 3, "model": "Student", "table": "students",
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
    # 04
    {
        "num": 4, "model": "Book", "table": "books",
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
    # 05
    {
        "num": 5, "model": "Order", "table": "orders",
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
    },
    # 06
    {
        "num": 6, "model": "Course", "table": "courses",
        "fields": [
            {"name": "course_code", "label": "Mã khóa học", "type": "text", "rules": "required|string|max:30", "searchable": True},
            {"name": "name", "label": "Tên khóa học", "type": "text", "rules": "required|string|max:200", "searchable": True},
            {"name": "duration_weeks", "label": "Thời lượng (tuần)", "type": "number", "rules": "required|integer|min:1"},
            {"name": "tuition_fee", "label": "Học phí (VNĐ)", "type": "number", "rules": "required|numeric|min:0"},
            {"name": "status", "label": "Trạng thái", "type": "select", "options": ["Đang tuyển sinh", "Đang học", "Đã kết thúc"], "rules": "required|string", "filterable": True},
            {"name": "description", "label": "Mô tả khóa học", "type": "textarea", "rules": "nullable|string"}
        ],
        "samples": [
            {"course_code": "LARAVEL101", "name": "Lập trình Backend chuyên nghiệp với Laravel", "duration_weeks": 12, "tuition_fee": 4500000, "status": "Đang tuyển sinh", "description": "Nắm vững Eloquent, REST API, Authentication và Kiến trúc MVC."},
            {"course_code": "REACT201", "name": "Xây dựng ứng dụng Frontend hiện đại với React 19", "duration_weeks": 10, "tuition_fee": 4200000, "status": "Đang tuyển sinh", "description": "Thực hành React hooks, State management và tối ưu hóa UI."},
            {"course_code": "DEVOPS301", "name": "Triển khai CI/CD và Docker cho dự án thực tế", "duration_weeks": 8, "tuition_fee": 3800000, "status": "Đang học", "description": "Tự động hóa build, test và deploy lên Cloud server."}
        ]
    },
    # 07
    {
        "num": 7, "model": "Employee", "table": "employees",
        "fields": [
            {"name": "employee_code", "label": "Mã nhân viên", "type": "text", "rules": "required|string|max:30", "searchable": True},
            {"name": "fullname", "label": "Họ và tên", "type": "text", "rules": "required|string|max:100", "searchable": True},
            {"name": "email", "label": "Email công vụ", "type": "email", "rules": "required|email", "searchable": True},
            {"name": "department", "label": "Phòng ban", "type": "select", "options": ["Kỹ thuật phần mềm", "Kinh doanh", "Nhân sự", "Kế toán", "Marketing"], "rules": "required|string", "filterable": True},
            {"name": "salary", "label": "Mức lương (VNĐ)", "type": "number", "rules": "required|numeric|min:0"},
            {"name": "status", "label": "Trạng thái làm việc", "type": "select", "options": ["Chính thức", "Thử việc", "Đã nghỉ việc"], "rules": "required|string", "filterable": True}
        ],
        "samples": [
            {"employee_code": "NV001", "fullname": "Trần Đình Khang", "email": "khang.td@company.vn", "department": "Kỹ thuật phần mềm", "salary": 22000000, "status": "Chính thức"},
            {"employee_code": "NV002", "fullname": "Lê Thị Thu Hằng", "email": "hang.lt@company.vn", "department": "Nhân sự", "salary": 16000000, "status": "Chính thức"},
            {"employee_code": "NV003", "fullname": "Vũ Anh Tuấn", "email": "tuan.va@company.vn", "department": "Kinh doanh", "salary": 14000000, "status": "Thử việc"}
        ]
    },
    # 08
    {
        "num": 8, "model": "Room", "table": "rooms",
        "fields": [
            {"name": "room_code", "label": "Mã số phòng", "type": "text", "rules": "required|string|max:30", "searchable": True},
            {"name": "room_type", "label": "Loại phòng", "type": "select", "options": ["Phòng đơn", "Phòng đôi", "Căn hộ mini", "Studio"], "rules": "required|string", "filterable": True},
            {"name": "area_m2", "label": "Diện tích (m²)", "type": "number", "rules": "required|numeric|min:5"},
            {"name": "rent_price", "label": "Giá thuê / tháng (VNĐ)", "type": "number", "rules": "required|numeric|min:0"},
            {"name": "status", "label": "Trạng thái", "type": "select", "options": ["Còn trống", "Đã cho thuê", "Đang sửa chữa"], "rules": "required|string", "filterable": True},
            {"name": "description", "label": "Mô tả & Tiện ích", "type": "textarea", "rules": "nullable|string"}
        ],
        "samples": [
            {"room_code": "P101", "room_type": "Phòng đơn", "area_m2": 20, "rent_price": 2800000, "status": "Còn trống", "description": "Có ban công thoáng mát, nóng lạnh, máy lạnh inverter."},
            {"room_code": "P102", "room_type": "Studio", "area_m2": 32, "rent_price": 4500000, "status": "Đã cho thuê", "description": "Full nội thất: giường tủ, máy giặt riêng, bếp từ."},
            {"room_code": "P201", "room_type": "Căn hộ mini", "area_m2": 38, "rent_price": 5200000, "status": "Còn trống", "description": "Gác lửng đúc cao cấp, bãi xe tầng trệt có bảo vệ 24/7."}
        ]
    },
    # 09
    {
        "num": 9, "model": "MenuItem", "table": "menu_items",
        "fields": [
            {"name": "item_name", "label": "Tên món ăn / thức uống", "type": "text", "rules": "required|string|max:150", "searchable": True},
            {"name": "category", "label": "Danh mục", "type": "select", "options": ["Khai vị", "Món chính", "Tráng miệng", "Đồ uống"], "rules": "required|string", "filterable": True},
            {"name": "price", "label": "Đơn giá (VNĐ)", "type": "number", "rules": "required|numeric|min:0"},
            {"name": "is_available", "label": "Trạng thái phục vụ", "type": "select", "options": ["Đang phục vụ", "Tạm hết hàng"], "rules": "required|string", "filterable": True},
            {"name": "description", "label": "Mô tả món ăn", "type": "textarea", "rules": "nullable|string"}
        ],
        "samples": [
            {"item_name": "Phở Bò Tái Lăn Hà Nội", "category": "Món chính", "price": 65000, "is_available": "Đang phục vụ", "description": "Bò xào tái lăn thơm mùi tỏi, nước dùng ninh từ xương ống 12 tiếng."},
            {"item_name": "Gỏi Cuốn Tôm Thịt", "category": "Khai vị", "price": 45000, "is_available": "Đang phục vụ", "description": "Kèm nước chấm tương đen đậu phộng chuẩn vị miền Nam."},
            {"item_name": "Trà Đào Cam Sả", "category": "Đồ uống", "price": 38000, "is_available": "Đang phục vụ", "description": "Hương vị thanh mát, đào miếng giòn ngọt mát lạnh."}
        ]
    },
    # 10
    {
        "num": 10, "model": "Patient", "table": "patients",
        "fields": [
            {"name": "patient_code", "label": "Mã bệnh nhân", "type": "text", "rules": "required|string|max:30", "searchable": True},
            {"name": "fullname", "label": "Họ và tên bệnh nhân", "type": "text", "rules": "required|string|max:100", "searchable": True},
            {"name": "phone", "label": "Số điện thoại liên hệ", "type": "text", "rules": "required|string|max:20", "searchable": True},
            {"name": "birthdate", "label": "Ngày sinh", "type": "date", "rules": "required|date"},
            {"name": "gender", "label": "Giới tính", "type": "select", "options": ["Nam", "Nữ", "Khác"], "rules": "required|string", "filterable": True},
            {"name": "notes", "label": "Ghi chú bệnh án / triệu chứng", "type": "textarea", "rules": "nullable|string"}
        ],
        "samples": [
            {"patient_code": "BN2026-001", "fullname": "Hoàng Minh Trí", "phone": "0912345678", "birthdate": "1995-04-12", "gender": "Nam", "notes": "Tiền sử viêm họng dị ứng thời tiết, huyết áp ổn định."},
            {"patient_code": "BN2026-002", "fullname": "Đỗ Bích Ngọc", "phone": "0987654321", "birthdate": "1998-10-25", "gender": "Nữ", "notes": "Khám định kỳ răng hàm mặt, không dị ứng thuốc kháng sinh."},
            {"patient_code": "BN2026-003", "fullname": "Lâm Quốc Cường", "phone": "0905112233", "birthdate": "1982-01-18", "gender": "Nam", "notes": "Đau mỏi vai gáy do làm việc văn phòng kéo dài."}
        ]
    }
]

# We will generate programmatic specifications for topics 11 to 50 based on their actual topic
additional_specs = [
    # 11
    (11, "Task", "tasks", [
        ("title", "Tiêu đề công việc", "text", "required|string|max:200", True, False),
        ("assignee", "Người phụ trách", "text", "required|string|max:100", True, False),
        ("priority", "Mức độ ưu tiên", "select", ["Thấp", "Trung bình", "Cao", "Khẩn cấp"], "required|string", False, True),
        ("due_date", "Hạn hoàn thành", "date", "required|date", False, False),
        ("status", "Trạng thái", "select", ["Chưa bắt đầu", "Đang thực hiện", "Hoàn thành", "Tạm hoãn"], "required|string", False, True),
        ("description", "Mô tả chi tiết", "textarea", "nullable|string", False, False)
    ]),
    # 12
    (12, "Event", "events", [
        ("event_name", "Tên sự kiện", "text", "required|string|max:200", True, False),
        ("location", "Địa điểm tổ chức", "text", "required|string|max:200", True, False),
        ("event_date", "Thời gian diễn ra", "date", "required|date", False, False),
        ("capacity", "Số lượng chỗ tối đa", "number", "required|integer|min:1", False, False),
        ("status", "Trạng thái", "select", ["Sắp diễn ra", "Đang diễn ra", "Đã kết thúc", "Đã hủy"], "required|string", False, True),
        ("description", "Mô tả sự kiện", "textarea", "nullable|string", False, False)
    ]),
    # 13
    (13, "Assignment", "assignments", [
        ("title", "Tiêu đề bài tập", "text", "required|string|max:200", True, False),
        ("course_name", "Môn học", "select", ["Lập trình Web", "Cơ sở dữ liệu", "Cấu trúc dữ liệu", "Mạng máy tính"], "required|string", False, True),
        ("deadline", "Hạn chót nộp bài", "date", "required|date", False, False),
        ("max_score", "Điểm tối đa", "number", "required|numeric|between:1,10", False, False),
        ("status", "Trạng thái", "select", ["Đang mở", "Đã đóng", "Đã chấm điểm"], "required|string", False, True),
        ("content", "Yêu cầu chi tiết bài tập", "textarea", "required|string|min:10", False, False)
    ]),
    # 14
    (14, "InventoryItem", "inventory_items", [
        ("item_code", "Mã hàng tồn kho", "text", "required|string|max:30", True, False),
        ("item_name", "Tên mặt hàng", "text", "required|string|max:200", True, False),
        ("warehouse_location", "Vị trí kho", "select", ["Kho Tổng A", "Kho B - Phía Đông", "Kho C - Dự phòng", "Kho Lạnh"], "required|string", False, True),
        ("quantity", "Số lượng tồn", "number", "required|integer|min:0", False, True),
        ("unit_price", "Đơn giá nhập (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("notes", "Ghi chú", "textarea", "nullable|string", False, False)
    ]),
    # 15
    (15, "Feedback", "feedbacks", [
        ("fullname", "Họ và tên khách hàng", "text", "required|string|max:100", True, False),
        ("email", "Email liên lạc", "email", "required|email", True, False),
        ("subject", "Chủ đề phản hồi", "text", "required|string|max:200", True, False),
        ("rating", "Đánh giá sao", "select", ["1 Sao", "2 Sao", "3 Sao", "4 Sao", "5 Sao"], "required|string", False, True),
        ("status", "Trạng thái xử lý", "select", ["Chờ tiếp nhận", "Đang xử lý", "Đã phản hồi", "Đã đóng"], "required|string", False, True),
        ("content", "Nội dung phản hồi", "textarea", "required|string|min:5", False, False)
    ]),
    # 16
    (16, "Category", "categories", [
        ("category_code", "Mã danh mục", "text", "required|string|max:30", True, False),
        ("name", "Tên danh mục", "text", "required|string|max:150", True, False),
        ("display_order", "Thứ tự hiển thị", "number", "required|integer|min:1", False, False),
        ("status", "Trạng thái", "select", ["Hoạt động", "Tạm dừng"], "required|string", False, True),
        ("description", "Mô tả danh mục", "textarea", "nullable|string", False, False)
    ]),
    # 17
    (17, "Supplier", "suppliers", [
        ("supplier_code", "Mã nhà cung cấp", "text", "required|string|max:30", True, False),
        ("name", "Tên nhà cung cấp", "text", "required|string|max:200", True, False),
        ("phone", "Số điện thoại", "text", "required|string|max:20", True, False),
        ("email", "Email liên hệ", "email", "required|email", True, False),
        ("address", "Địa chỉ", "text", "required|string|max:255", False, False),
        ("cooperation_status", "Trạng thái hợp tác", "select", ["Đang hợp tác", "Tạm ngưng", "Ngừng hợp tác"], "required|string", False, True)
    ]),
    # 18
    (18, "Warranty", "warranties", [
        ("warranty_code", "Mã phiếu bảo hành", "text", "required|string|max:30", True, False),
        ("product_name", "Tên sản phẩm", "text", "required|string|max:200", True, False),
        ("customer_name", "Tên khách hàng", "text", "required|string|max:100", True, False),
        ("received_date", "Ngày tiếp nhận", "date", "required|date", False, False),
        ("status", "Tiến độ bảo hành", "select", ["Tiếp nhận", "Đang sửa chữa", "Chờ linh kiện", "Đã hoàn thành", "Đã trả khách"], "required|string", False, True),
        ("issue_description", "Mô tả lỗi sản phẩm", "textarea", "required|string|min:5", False, False)
    ]),
    # 19
    (19, "Job", "jobs", [
        ("job_title", "Chức danh tuyển dụng", "text", "required|string|max:200", True, False),
        ("department", "Phòng ban / Đội ngũ", "select", ["Công nghệ", "Kinh doanh", "Nhân sự", "Tài chính"], "required|string", False, True),
        ("salary_range", "Mức lương đề xuất", "text", "required|string|max:100", False, False),
        ("deadline", "Hạn nộp hồ sơ", "date", "required|date", False, False),
        ("status", "Trạng thái tin", "select", ["Đang nhận hồ sơ", "Đang phỏng vấn", "Đã tuyển đủ"], "required|string", False, True),
        ("requirements", "Yêu cầu ứng viên", "textarea", "required|string", False, False)
    ]),
    # 20
    (20, "Invoice", "invoices", [
        ("invoice_code", "Mã hóa đơn", "text", "required|string|max:30", True, False),
        ("customer_name", "Tên khách hàng", "text", "required|string|max:150", True, False),
        ("created_date", "Ngày lập hóa đơn", "date", "required|date", False, False),
        ("total_amount", "Tổng tiền thanh toán (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("payment_status", "Trạng thái thanh toán", "select", ["Chưa thanh toán", "Đã thanh toán một phần", "Đã thanh toán đầy đủ", "Đã hủy"], "required|string", False, True),
        ("notes", "Ghi chú hóa đơn", "textarea", "nullable|string", False, False)
    ]),
    # 21
    (21, "CollaboratorPost", "collaborator_posts", [
        ("title", "Tiêu đề tin tuyển CTV", "text", "required|string|max:200", True, False),
        ("position", "Vị trí CTV", "select", ["Viết bài Content", "Thiết kế đồ họa", "Dịch thuật", "Hỗ trợ khách hàng"], "required|string", False, True),
        ("compensation", "Mức thù lao / sản phẩm", "text", "required|string|max:100", False, False),
        ("deadline", "Hạn ứng tuyển", "date", "required|date", False, False),
        ("status", "Trạng thái", "select", ["Đang tuyển", "Tạm dừng", "Đã kết thúc"], "required|string", False, True),
        ("details", "Mô tả công việc", "textarea", "required|string|min:10", False, False)
    ]),
    # 22
    (22, "Document", "documents", [
        ("doc_code", "Mã số tài liệu", "text", "required|string|max:30", True, False),
        ("title", "Tên tài liệu", "text", "required|string|max:200", True, False),
        ("category", "Danh mục tài liệu", "select", ["Quy chế nội bộ", "Tài liệu kỹ thuật", "Báo cáo tài chính", "Biểu mẫu hành chính"], "required|string", False, True),
        ("author", "Người biên soạn", "text", "required|string|max:100", True, False),
        ("security_level", "Mức độ bảo mật", "select", ["Công khai", "Nội bộ công ty", "Bảo mật cao"], "required|string", False, True),
        ("summary", "Tóm tắt tài liệu", "textarea", "nullable|string", False, False)
    ]),
    # 23
    (23, "WorkSchedule", "work_schedules", [
        ("employee_name", "Tên nhân viên", "text", "required|string|max:100", True, False),
        ("shift", "Ca làm việc", "select", ["Ca sáng (06:00 - 14:00)", "Ca chiều (14:00 - 22:00)", "Ca đêm (22:00 - 06:00)", "Ca hành chính"], "required|string", False, True),
        ("work_date", "Ngày làm việc", "date", "required|date", False, False),
        ("workstation", "Khu vực / Bàn làm việc", "text", "required|string|max:100", False, False),
        ("status", "Trạng thái điểm danh", "select", ["Đã lên lịch", "Có mặt", "Đi muộn", "Vắng mặt"], "required|string", False, True),
        ("notes", "Ghi chú bàn giao", "textarea", "nullable|string", False, False)
    ]),
    # 24
    (24, "Equipment", "equipments", [
        ("equipment_code", "Mã thiết bị", "text", "required|string|max:30", True, False),
        ("name", "Tên thiết bị", "text", "required|string|max:150", True, False),
        ("category", "Phân loại", "select", ["Máy tính văn phòng", "Máy in / Scan", "Thiết bị mạng", "Máy chiếu hội trường"], "required|string", False, True),
        ("purchase_date", "Ngày bàn giao", "date", "required|date", False, False),
        ("condition_status", "Tình trạng sử dụng", "select", ["Hoạt động tốt", "Cần bảo dưỡng", "Hỏng hóc", "Thanh lý"], "required|string", False, True),
        ("notes", "Ghi chú cấu hình", "textarea", "nullable|string", False, False)
    ]),
    # 25
    (25, "SupportTicket", "support_tickets", [
        ("ticket_code", "Mã yêu cầu hỗ trợ", "text", "required|string|max:30", True, False),
        ("requester_name", "Người yêu cầu", "text", "required|string|max:100", True, False),
        ("issue_type", "Loại sự cố", "select", ["Sự cố phần mềm", "Hỏng phần cứng", "Mất kết nối mạng", "Cấp quyền truy cập"], "required|string", False, True),
        ("priority", "Độ khẩn cấp", "select", ["Thấp", "Trung bình", "Cao", "Khẩn cấp"], "required|string", False, True),
        ("status", "Tiến độ xử lý", "select", ["Mới tiếp nhận", "Đang xử lý", "Chờ phản hồi", "Đã giải quyết"], "required|string", False, True),
        ("description", "Chi tiết sự cố", "textarea", "required|string|min:5", False, False)
    ]),
    # 26
    (26, "Phone", "phones", [
        ("phone_code", "Mã mẫu máy", "text", "required|string|max:30", True, False),
        ("phone_name", "Tên điện thoại", "text", "required|string|max:150", True, False),
        ("brand", "Hãng sản xuất", "select", ["Apple", "Samsung", "Xiaomi", "OPPO", "Sony"], "required|string", False, True),
        ("price", "Giá niêm yết (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("storage_gb", "Dung lượng bộ nhớ", "select", ["64GB", "128GB", "256GB", "512GB", "1TB"], "required|string", False, True),
        ("stock", "Tồn kho máy mới", "number", "required|integer|min:0", False, False)
    ]),
    # 27
    (27, "FashionProduct", "fashion_products", [
        ("product_code", "Mã sản phẩm thời trang", "text", "required|string|max:30", True, False),
        ("name", "Tên trang phục", "text", "required|string|max:150", True, False),
        ("category", "Danh mục", "select", ["Áo sơ mi", "Áo thun", "Quần jean", "Váy đầm", "Áo khoác"], "required|string", False, True),
        ("size", "Kích cỡ (Size)", "select", ["S", "M", "L", "XL", "XXL", "Free size"], "required|string", False, True),
        ("price", "Giá bán (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("stock", "Số lượng trong kho", "number", "required|integer|min:0", False, False)
    ]),
    # 28
    (28, "RepairTicket", "repair_tickets", [
        ("ticket_code", "Mã tiếp nhận sửa chữa", "text", "required|string|max:30", True, False),
        ("customer_name", "Họ tên khách hàng", "text", "required|string|max:100", True, False),
        ("device_model", "Tên dòng máy / Laptop", "text", "required|string|max:150", True, False),
        ("estimated_cost", "Chi phí dự kiến (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("status", "Trạng thái sửa chữa", "select", ["Tiếp nhận", "Đang kiểm tra", "Chờ linh kiện thay thế", "Đã sửa xong", "Đã giao máy"], "required|string", False, True),
        ("defect_description", "Triệu chứng lỗi", "textarea", "required|string|min:5", False, False)
    ]),
    # 29
    (29, "CourseSection", "course_sections", [
        ("section_code", "Mã lớp học phần", "text", "required|string|max:30", True, False),
        ("course_name", "Tên môn học", "text", "required|string|max:150", True, False),
        ("lecturer", "Giảng viên phụ trách", "text", "required|string|max:100", True, False),
        ("credits", "Số tín chỉ", "number", "required|integer|between:1,5", False, True),
        ("max_students", "Số lượng SV tối đa", "number", "required|integer|min:10", False, False),
        ("status", "Tình trạng lớp", "select", ["Đang mở đăng ký", "Đã đủ sĩ số", "Đã đóng lớp"], "required|string", False, True)
    ]),
    # 30
    (30, "Workshop", "workshops", [
        ("workshop_name", "Tên hội thảo / Chuyên đề", "text", "required|string|max:200", True, False),
        ("speaker", "Diễn giả chính", "text", "required|string|max:100", True, False),
        ("event_date", "Ngày tổ chức", "date", "required|date", False, False),
        ("fee", "Phí tham dự (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("status", "Trạng thái đăng ký", "select", ["Mở đăng ký", "Sắp hết chỗ", "Đã đủ người", "Đã kết thúc"], "required|string", False, True),
        ("description", "Nội dung chương trình", "textarea", "nullable|string", False, False)
    ]),
    # 31
    (31, "Recipe", "recipes", [
        ("recipe_name", "Tên món ăn / Công thức", "text", "required|string|max:150", True, False),
        ("cuisine_type", "Ẩm thực", "select", ["Món Việt", "Món Á", "Món Âu", "Món Chay", "Làm Bánh"], "required|string", False, True),
        ("cooking_time_minutes", "Thời gian nấu (phút)", "number", "required|integer|min:1", False, False),
        ("difficulty", "Độ khó", "select", ["Dễ làm", "Trung bình", "Khó"], "required|string", False, True),
        ("ingredients", "Nguyên liệu chính", "textarea", "required|string", False, False),
        ("instructions", "Các bước thực hiện", "textarea", "required|string|min:10", False, False)
    ]),
    # 32
    (32, "Question", "questions", [
        ("topic", "Chủ đề câu hỏi", "select", ["Lập trình Web", "Cơ sở dữ liệu", "Giải thuật", "Mạng máy tính"], "required|string", False, True),
        ("question_text", "Nội dung câu hỏi", "textarea", "required|string|min:10", True, False),
        ("difficulty", "Mức độ", "select", ["Dễ", "Trung bình", "Khó", "Nâng cao"], "required|string", False, True),
        ("correct_answer", "Đáp án chính xác", "select", ["Đáp án A", "Đáp án B", "Đáp án C", "Đáp án D"], "required|string", False, False),
        ("points", "Điểm số", "number", "required|numeric|between:0.5,10", False, False),
        ("explanation", "Giải thích chi tiết", "textarea", "nullable|string", False, False)
    ]),
    # 33
    (33, "Project", "projects", [
        ("project_name", "Tên dự án phần mềm", "text", "required|string|max:200", True, False),
        ("leader_name", "Trưởng dự án (PM)", "text", "required|string|max:100", True, False),
        ("start_date", "Ngày bắt đầu", "date", "required|date", False, False),
        ("deadline", "Hạn bàn giao", "date", "required|date", False, False),
        ("budget", "Ngân sách dự án (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("status", "Tiến độ dự án", "select", ["Khởi tạo", "Đang phát triển", "Đang kiểm thử (QA)", "Nghiệm thu", "Bảo trì"], "required|string", False, True)
    ]),
    # 34
    (34, "Customer", "customers", [
        ("fullname", "Họ tên khách hàng", "text", "required|string|max:100", True, False),
        ("phone", "Số điện thoại", "text", "required|string|max:20", True, False),
        ("email", "Email", "email", "required|email", True, False),
        ("customer_source", "Nguồn khách hàng", "select", ["Facebook Ads", "Google Search", "Giới thiệu bạn bè", "Hội thảo trực tiếp"], "required|string", False, True),
        ("status", "Phân loại khách hàng", "select", ["Khách hàng tiềm năng", "Đang tư vấn", "Đã ký hợp đồng", "Khách VIP"], "required|string", False, True),
        ("address", "Địa chỉ liên hệ", "text", "nullable|string|max:255", False, False)
    ]),
    # 35
    (35, "StockReceipt", "stock_receipts", [
        ("receipt_code", "Mã phiếu nhập kho", "text", "required|string|max:30", True, False),
        ("supplier_name", "Nhà cung cấp", "text", "required|string|max:150", True, False),
        ("receipt_date", "Ngày nhập kho", "date", "required|date", False, False),
        ("total_quantity", "Tổng số lượng nhập", "number", "required|integer|min:1", False, False),
        ("total_cost", "Tổng giá trị lô hàng (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("notes", "Ghi chú kiểm hàng", "textarea", "nullable|string", False, False)
    ]),
    # 36
    (36, "ProductReview", "product_reviews", [
        ("product_name", "Tên sản phẩm đánh giá", "text", "required|string|max:200", True, False),
        ("reviewer_name", "Người đánh giá", "text", "required|string|max:100", True, False),
        ("rating_stars", "Số sao đánh giá", "select", ["1 Sao (Rất tệ)", "2 Sao (Tạm ổn)", "3 Sao (Bình thường)", "4 Sao (Hài lòng)", "5 Sao (Xuất sắc)"], "required|string", False, True),
        ("comment", "Nhận xét chi tiết", "textarea", "required|string|min:5", False, False),
        ("status", "Trạng thái kiểm duyệt", "select", ["Chờ duyệt", "Đã duyệt hiển thị", "Đã ẩn do vi phạm"], "required|string", False, True)
    ]),
    # 37
    (37, "Promotion", "promotions", [
        ("promo_code", "Mã khuyến mãi (Voucher)", "text", "required|string|max:30", True, False),
        ("promo_name", "Tên chương trình", "text", "required|string|max:150", True, False),
        ("discount_percent", "Phần trăm giảm (%)", "number", "required|integer|between:1,100", False, True),
        ("start_date", "Ngày bắt đầu áp dụng", "date", "required|date", False, False),
        ("end_date", "Ngày kết thúc", "date", "required|date", False, False),
        ("status", "Hiệu lực", "select", ["Đang kích hoạt", "Sắp diễn ra", "Đã hết hạn", "Tạm khóa"], "required|string", False, True)
    ]),
    # 38
    (38, "Booking", "bookings", [
        ("booking_code", "Mã đặt phòng", "text", "required|string|max:30", True, False),
        ("guest_name", "Tên khách lưu trú", "text", "required|string|max:100", True, False),
        ("room_type", "Hạng phòng", "select", ["Standard", "Deluxe Room", "Suite Cao Cấp", "Presidential Suite"], "required|string", False, True),
        ("checkin_date", "Ngày nhận phòng", "date", "required|date", False, False),
        ("checkout_date", "Ngày trả phòng", "date", "required|date", False, False),
        ("status", "Tình trạng đặt phòng", "select", ["Đã xác nhận", "Đã cọc tiền", "Đã nhận phòng (Check-in)", "Đã hoàn thành", "Đã hủy"], "required|string", False, True)
    ]),
    # 39
    (39, "Vehicle", "vehicles", [
        ("license_plate", "Biển số xe", "text", "required|string|max:20", True, False),
        ("vehicle_type", "Loại phương tiện", "select", ["Xe tải nhẹ (1.5 tấn)", "Xe tải vừa (5 tấn)", "Xe container", "Xe đầu kéo", "Xe bán tải"], "required|string", False, True),
        ("payload_tons", "Tải trọng (Tấn)", "number", "required|numeric|min:0.5", False, False),
        ("inspection_date", "Ngày hết hạn đăng kiểm", "date", "required|date", False, False),
        ("status", "Tình trạng vận hành", "select", ["Sẵn sàng chạy", "Đang chở hàng", "Đang bảo trì định kỳ", "Hỏng hóc"], "required|string", False, True),
        ("driver_name", "Tài xế phụ trách", "text", "nullable|string|max:100", True, False)
    ]),
    # 40
    (40, "Appointment", "appointments", [
        ("customer_name", "Tên khách hàng", "text", "required|string|max:100", True, False),
        ("phone", "Số điện thoại", "text", "required|string|max:20", True, False),
        ("service_name", "Dịch vụ hẹn trước", "select", ["Khám sức khỏe tổng quát", "Tư vấn tài chính", "Chăm sóc da spa", "Bảo dưỡng xe định kỳ"], "required|string", False, True),
        ("appointment_date", "Ngày hẹn", "date", "required|date", False, False),
        ("appointment_time", "Khung giờ hẹn", "select", ["08:30 - 09:30", "10:00 - 11:00", "14:00 - 15:00", "16:00 - 17:00"], "required|string", False, False),
        ("status", "Trạng thái", "select", ["Đã đặt hẹn", "Đã xác nhận điện thoại", "Khách đã đến", "Hủy hẹn"], "required|string", False, True)
    ]),
    # 41
    (41, "Expense", "expenses", [
        ("expense_title", "Tên khoản chi phí", "text", "required|string|max:200", True, False),
        ("category", "Danh mục chi phí", "select", ["Thiết bị văn phòng", "Chi phí tiếp khách", "Đi lại công tác", "Thuê dịch vụ ngoài"], "required|string", False, True),
        ("amount", "Số tiền (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("expense_date", "Ngày phát sinh chi phí", "date", "required|date", False, False),
        ("proposer", "Người đề xuất chi", "text", "required|string|max:100", True, False),
        ("status", "Tình trạng duyệt", "select", ["Chờ quản lý duyệt", "Đã phê duyệt", "Đã chi tiền", "Bị từ chối"], "required|string", False, True)
    ]),
    # 42
    (42, "Member", "members", [
        ("member_code", "Mã thẻ thành viên", "text", "required|string|max:30", True, False),
        ("fullname", "Họ và tên thành viên", "text", "required|string|max:100", True, False),
        ("email", "Email", "email", "required|email", True, False),
        ("member_tier", "Hạng thành viên", "select", ["Thành viên Chuẩn", "Bạc (Silver)", "Vàng (Gold)", "Bạch Kim (Platinum)"], "required|string", False, True),
        ("join_date", "Ngày gia nhập", "date", "required|date", False, False),
        ("status", "Trạng thái", "select", ["Đang hoạt động", "Hết hạn", "Tạm khóa"], "required|string", False, True)
    ]),
    # 43
    (43, "RealEstate", "real_estates", [
        ("title", "Tiêu đề tin bất động sản", "text", "required|string|max:200", True, False),
        ("property_type", "Loại hình BĐS", "select", ["Căn hộ chung cư", "Nhà phố liền kề", "Biệt thự cao cấp", "Đất nền dự án", "Mặt bằng kinh doanh"], "required|string", False, True),
        ("address", "Vị trí / Địa chỉ", "text", "required|string|max:255", True, False),
        ("area_m2", "Diện tích (m²)", "number", "required|numeric|min:10", False, False),
        ("price_billion", "Giá bán (Tỷ VNĐ)", "number", "required|numeric|min:0.1", False, False),
        ("status", "Tình trạng giao dịch", "select", ["Đang mở bán", "Đã nhận cọc", "Đã giao dịch thành công"], "required|string", False, True)
    ]),
    # 44
    (44, "PurchaseRequest", "purchase_requests", [
        ("request_code", "Mã yêu cầu mua hàng", "text", "required|string|max:30", True, False),
        ("requester_name", "Người đề xuất", "text", "required|string|max:100", True, False),
        ("item_name", "Tên mặt hàng cần mua", "text", "required|string|max:150", True, False),
        ("quantity", "Số lượng", "number", "required|integer|min:1", False, False),
        ("estimated_cost", "Đơn giá dự kiến (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("status", "Trạng thái xét duyệt", "select", ["Chờ phòng thu mua duyệt", "Đang báo giá", "Đã duyệt mua hàng", "Hủy yêu cầu"], "required|string", False, True)
    ]),
    # 45
    (45, "Asset", "assets", [
        ("asset_code", "Mã tài sản cố định", "text", "required|string|max:30", True, False),
        ("asset_name", "Tên tài sản", "text", "required|string|max:150", True, False),
        ("department", "Bộ phận quản lý / sử dụng", "select", ["Ban Giám Đốc", "Phòng Kỹ Thuật", "Phòng Kế Toán", "Phòng Hành Chính"], "required|string", False, True),
        ("purchase_date", "Ngày mua", "date", "required|date", False, False),
        ("original_value", "Nguyên giá sổ sách (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("status", "Hiện trạng tài sản", "select", ["Đang sử dụng tốt", "Cần bảo trì", "Chờ sửa chữa", "Đã hết khấu hao"], "required|string", False, True)
    ]),
    # 46
    (46, "ForumPost", "forum_posts", [
        ("title", "Tiêu đề thảo luận", "text", "required|string|max:200", True, False),
        ("category", "Chuyên mục diễn đàn", "select", ["Hỏi đáp Lập trình", "Chia sẻ tài liệu", "Góc tuyển dụng", "Trò chuyện chung"], "required|string", False, True),
        ("author_name", "Tác giả bài đăng", "text", "required|string|max:100", True, False),
        ("content", "Nội dung bài viết", "textarea", "required|string|min:10", False, False),
        ("status", "Trạng thái duyệt", "select", ["Đã hiển thị", "Chờ kiểm duyệt", "Khóa bình luận"], "required|string", False, True)
    ]),
    # 47
    (47, "Service", "services", [
        ("service_code", "Mã gói dịch vụ", "text", "required|string|max:30", True, False),
        ("service_name", "Tên gói dịch vụ", "text", "required|string|max:150", True, False),
        ("service_type", "Nhóm dịch vụ", "select", ["Dịch vụ Lưu trữ Cloud", "Bảo trì phần mềm", "Thiết kế Website", "Tư vấn bảo mật"], "required|string", False, True),
        ("price", "Giá cước hàng tháng (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("duration_months", "Thời hạn hợp đồng (tháng)", "select", ["1 tháng", "6 tháng", "12 tháng", "24 tháng"], "required|string", False, False),
        ("status", "Tình trạng cung cấp", "select", ["Đang cung cấp", "Tạm ngừng đăng ký mới"], "required|string", False, True)
    ]),
    # 48
    (48, "ResearchTopic", "research_topics", [
        ("topic_code", "Mã đề tài nghiên cứu", "text", "required|string|max:30", True, False),
        ("topic_name", "Tên đề tài khoa học", "text", "required|string|max:255", True, False),
        ("supervisor", "Chủ nhiệm đề tài", "text", "required|string|max:100", True, False),
        ("field", "Lĩnh vực nghiên cứu", "select", ["Trí tuệ nhân tạo (AI)", "An toàn thông tin", "Dữ liệu lớn (Big Data)", "Internet vạn vật (IoT)"], "required|string", False, True),
        ("funding", "Kinh phí nghiên cứu (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("status", "Tiến độ nghiên cứu", "select", ["Đang đăng ký", "Đang thực hiện", "Nghiệm thu cấp cơ sở", "Đã bảo vệ thành công"], "required|string", False, True)
    ]),
    # 49
    (49, "InternshipRegistration", "internships", [
        ("student_code", "Mã sinh viên", "text", "required|string|max:20", True, False),
        ("student_name", "Họ tên sinh viên", "text", "required|string|max:100", True, False),
        ("company_name", "Doanh nghiệp tiếp nhận", "text", "required|string|max:150", True, False),
        ("internship_role", "Vị trí thực tập", "select", ["Thực tập sinh Backend", "Thực tập sinh Frontend", "Thực tập sinh QA/QC", "Thực tập sinh DevOps"], "required|string", False, True),
        ("start_date", "Ngày bắt đầu", "date", "required|date", False, False),
        ("status", "Trạng thái xét duyệt", "select", ["Chờ khoa duyệt", "Đã duyệt tiếp nhận", "Đang thực tập", "Đã nộp báo cáo"], "required|string", False, True)
    ]),
    # 50
    (50, "SaleProduct", "sales_products", [
        ("product_code", "Mã hàng", "text", "required|string|max:30", True, False),
        ("name", "Tên mặt hàng kinh doanh", "text", "required|string|max:200", True, False),
        ("category", "Ngành hàng", "select", ["Thời trang & Làm đẹp", "Đồ điện tử công nghệ", "Nhà cửa & Đời sống", "Bách hóa online"], "required|string", False, True),
        ("price", "Giá bán (VNĐ)", "number", "required|numeric|min:0", False, False),
        ("stock", "Tồn kho thực tế", "number", "required|integer|min:0", False, False),
        ("status", "Tình trạng kinh doanh", "select", ["Đang kinh doanh", "Hết hàng tạm thời", "Ngừng kinh doanh"], "required|string", False, True)
    ])
]

# Convert additional_specs into full defs format
for item in additional_specs:
    num, model, table, fields_raw = item
    fields = []
    for f in fields_raw:
        if f[2] == "select":
            fields.append({
                "name": f[0], "label": f[1], "type": f[2], "options": f[3],
                "rules": f[4], "searchable": f[5], "filterable": f[6]
            })
        else:
            fields.append({
                "name": f[0], "label": f[1], "type": f[2],
                "rules": f[3], "searchable": f[4], "filterable": f[5]
            })
    defs.append({
        "num": num, "model": model, "table": table,
        "fields": fields,
        "samples": []  # will be generated automatically
    })

# Merge with raw_exams
full_meta = []
for exam in raw_exams:
    n = exam['num']
    # find spec
    spec = next((d for d in defs if d['num'] == n), None)
    if not spec:
        continue
    
    # Generate 3 samples if empty
    samples = spec.get('samples', [])
    if not samples:
        for i in range(1, 4):
            sample = {}
            for f in spec['fields']:
                fname = f['name']
                ftype = f['type']
                if ftype == 'text':
                    if 'code' in fname:
                        sample[fname] = f"{spec['model'].upper()[:3]}-{n:02d}{i:02d}"
                    elif 'name' in fname:
                        sample[fname] = f"{f['label']} mẫu #{i}"
                    elif 'phone' in fname:
                        sample[fname] = f"09{n:02d}888{i:02d}9"
                    elif 'address' in fname or 'location' in fname:
                        sample[fname] = f"{i*12} Đường Lê Lợi, Quận {i}, TP.HCM"
                    else:
                        sample[fname] = f"Dữ liệu {f['label']} số {i}"
                elif ftype == 'email':
                    sample[fname] = f"user{n:02d}_{i}@example.com"
                elif ftype == 'number':
                    sample[fname] = (i * 150000) if 'price' in fname or 'cost' in fname or 'amount' in fname or 'budget' in fname else (i * 5 + 10)
                elif ftype == 'date':
                    sample[fname] = f"2026-11-{10+i:02d}"
                elif ftype == 'select':
                    opts = f.get('options', ['Mặc định'])
                    sample[fname] = opts[(i-1) % len(opts)]
                elif ftype == 'textarea':
                    sample[fname] = f"Mô tả chi tiết và nội dung mẫu thử nghiệm cho bài tập {n:02d} - mục #{i}."
            samples.append(sample)

    full_meta.append({
        "num": n,
        "num_str": f"{n:02d}",
        "title": exam['title'],
        "desc": exam['desc'].replace('\n', ' ').strip(),
        "db_name": f"db_bai{n:02d}",
        "model": spec['model'],
        "table": spec['table'],
        "controller": f"Bai{n:02d}Controller",
        "fields": spec['fields'],
        "samples": samples,
        "full_text": exam['full_text']
    })

with open('storage/app/all_exercises_meta.json', 'w', encoding='utf-8') as out:
    json.dump(full_meta, out, ensure_ascii=False, indent=2)

print(f"Generated complete metadata for {len(full_meta)} exercises!")
