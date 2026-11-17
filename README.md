# Hệ Thống Ôn Tập Môn Thực Hành Laravel - 50 Đề Bài Tập

Dự án hoàn thiện toàn bộ **50 bài tập thực hành Laravel** (từ ĐỀ SỐ 1 đến ĐỀ SỐ 50) từ tài liệu ôn tập môn thực hành. 

Toàn bộ 50 bài tập được tổ chức chuẩn mực:
- **Mỗi bài 1 Controller riêng biệt**: `app/Http/Controllers/BaiTap/Bai01Controller.php` &rarr; `Bai50Controller.php`
- **Mỗi bài 1 Model Eloquent riêng**: `app/Models/BaiTap/Bai01Post.php` &rarr; `Bai50SaleProduct.php`
- **Mỗi bài 1 View riêng**: `resources/views/baitap/bai01.blade.php` &rarr; `bai50.blade.php`
- **Cơ sở dữ liệu độc lập từng bài trên MySQL / phpMyAdmin**: `db_bai01`, `db_bai02`, ..., `db_bai50`
- **UI Tổng điều khiển**: Bảng điều khiển tổng hợp danh sách 50 bài tập kèm tính năng **"Khởi tạo 50 CSDL 1 Click"**
- **Điều hướng mượt mà**: Nút bấm qua lại giữa các bài (`Bài trước`, `Bài tiếp theo`, `Dropdown chọn bài 1..50`, `Về UI Tổng`)

---

## 🚀 Hướng Dẫn Cài Đặt & Chạy Trên XAMPP

### 1. Khởi động XAMPP
- Mở **XAMPP Control Panel**, nhấn **Start** cho **Apache** và **MySQL**.
- Mở trình duyệt kiểm tra phpMyAdmin: [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)

### 2. Khởi tạo Cơ sở dữ liệu & Dữ liệu mẫu (Tất cả 50 bài)
Bạn có thể khởi tạo tự động toàn bộ 50 cơ sở dữ liệu (`db_bai01` đến `db_bai50`) qua lệnh Artisan:
```bash
php artisan baitap:init-all
```
Hoặc truy cập giao diện web và bấm nút **"Khởi tạo tất cả 50 CSDL (1 Click)"**.

### 3. Khởi chạy ứng dụng
Có 2 cách truy cập:

#### Cách 1: Sử dụng Laravel Development Server (Khuyên dùng)
```bash
php artisan serve --port=8000
```
Truy cập tại: **[http://127.0.0.1:8000/](http://127.0.0.1:8000/)**

#### Cách 2: Sử dụng trực tiếp qua Apache XAMPP
Dự án đã được liên kết với thư mục htdocs của XAMPP:
Truy cập tại: **[http://localhost/baitap/](http://localhost/baitap/)**

---

## 📁 Cấu Trúc Mã Nguồn

```text
c:\Users\Drago\Desktop\BaiTap/
├── app/
│   ├── Console/Commands/
│   │   └── InitAllBaiTapDatabases.php    # Artisan command tạo 50 CSDL
│   ├── Http/Controllers/BaiTap/
│   │   ├── BaseBaiTapController.php      # Controller cốt lõi chuẩn hóa 8 câu hỏi
│   │   ├── DashboardController.php       # Controller UI Tổng 50 bài
│   │   ├── Bai01Controller.php           # Đề 1: Quản lý bài viết tin tức
│   │   ├── Bai02Controller.php           # Đề 2: Quản lý sản phẩm
│   │   └── ... (đến Bai50Controller.php) # Đề 50: Quản lý bán hàng tổng hợp
│   ├── Models/BaiTap/
│   │   ├── Bai01Post.php
│   │   ├── Bai02Product.php
│   │   └── ... (đến Bai50SaleProduct.php)
│   └── Services/
│       └── BaiTapManager.php             # Xử lý kết nối động MySQL & phpMyAdmin
├── database/data/
│   └── all_exercises_meta.json           # Dữ liệu đặc tả chi tiết 50 bài tập
├── resources/views/baitap/
│   ├── layout.blade.php                  # Layout chung, thanh điều hướng qua lại
│   ├── dashboard.blade.php               # UI Tổng quản lý 50 bài
│   ├── detail.blade.php                  # Giao diện chạy bài tập (CRUD, Đề bài, CSDL)
│   ├── bai01.blade.php                   # View riêng cho từng bài (Đề 1)
│   └── ... (đến bai50.blade.php)         # View riêng cho từng bài (Đề 50)
└── routes/web.php                        # Định tuyến RESTful cho 50 bài tập
```

---

## 📋 Danh Sách 50 Đề Bài Tập & Cơ Sở Dữ Liệu Tương Ứng

| Đề | Tên Hệ Thống | Cơ Sở Dữ Liệu | Bảng Chính | Model Eloquent |
|:---|:---|:---|:---|:---|
| **01** | Quản lý bài viết tin tức | `db_bai01` | `posts` | `Bai01Post` |
| **02** | Quản lý sản phẩm | `db_bai02` | `products` | `Bai02Product` |
| **03** | Quản lý sinh viên | `db_bai03` | `students` | `Bai03Student` |
| **04** | Quản lý thư viện | `db_bai04` | `books` | `Bai04Book` |
| **05** | Quản lý đơn hàng | `db_bai05` | `orders` | `Bai05Order` |
| **06** | Quản lý khóa học | `db_bai06` | `courses` | `Bai06Course` |
| **07** | Quản lý nhân viên | `db_bai07` | `employees` | `Bai07Employee` |
| **08** | Quản lý phòng trọ | `db_bai08` | `rooms` | `Bai08Room` |
| **09** | Quản lý nhà hàng | `db_bai09` | `menu_items` | `Bai09MenuItem` |
| **10** | Quản lý phòng khám | `db_bai10` | `patients` | `Bai10Patient` |
| **11** | Quản lý công việc | `db_bai11` | `tasks` | `Bai11Task` |
| **12** | Quản lý sự kiện | `db_bai12` | `events` | `Bai12Event` |
| **13** | Quản lý bài tập trực tuyến | `db_bai13` | `assignments` | `Bai13Assignment` |
| **14** | Quản lý kho hàng | `db_bai14` | `inventory_items` | `Bai14InventoryItem` |
| **15** | Quản lý phản hồi khách hàng | `db_bai15` | `feedbacks` | `Bai15Feedback` |
| **16** | Quản lý danh mục sản phẩm | `db_bai16` | `categories` | `Bai16Category` |
| **17** | Quản lý nhà cung cấp | `db_bai17` | `suppliers` | `Bai17Supplier` |
| **18** | Quản lý phiếu bảo hành | `db_bai18` | `warranties` | `Bai18Warranty` |
| **19** | Quản lý tuyển dụng | `db_bai19` | `jobs` | `Bai19Job` |
| **20** | Quản lý hóa đơn | `db_bai20` | `invoices` | `Bai20Invoice` |
| **21** | Tuyển cộng tác viên | `db_bai21` | `collaborator_posts`| `Bai21CollaboratorPost` |
| **22** | Quản lý tài liệu nội bộ | `db_bai22` | `documents` | `Bai22Document` |
| **23** | Quản lý lịch làm việc | `db_bai23` | `work_schedules` | `Bai23WorkSchedule` |
| **24** | Quản lý thiết bị | `db_bai24` | `equipments` | `Bai24Equipment` |
| **25** | Yêu cầu hỗ trợ kỹ thuật | `db_bai25` | `support_tickets` | `Bai25SupportTicket` |
| **26** | Cửa hàng điện thoại | `db_bai26` | `phones` | `Bai26Phone` |
| **27** | Cửa hàng thời trang | `db_bai27` | `fashion_products` | `Bai27FashionProduct` |
| **28** | Dịch vụ sửa chữa máy tính | `db_bai28` | `repair_tickets` | `Bai28RepairTicket` |
| **29** | Đăng ký học phần | `db_bai29` | `course_sections` | `Bai29CourseSection` |
| **30** | Đăng ký hội thảo | `db_bai30` | `workshops` | `Bai30Workshop` |
| **31** | Công thức nấu ăn | `db_bai31` | `recipes` | `Bai31Recipe` |
| **32** | Câu hỏi trắc nghiệm | `db_bai32` | `questions` | `Bai32Question` |
| **33** | Quản lý dự án phần mềm | `db_bai33` | `projects` | `Bai33Project` |
| **34** | Quản lý khách hàng | `db_bai34` | `customers` | `Bai34Customer` |
| **35** | Phiếu nhập kho | `db_bai35` | `stock_receipts` | `Bai35StockReceipt` |
| **36** | Đánh giá sản phẩm | `db_bai36` | `product_reviews` | `Bai36ProductReview` |
| **37** | Chương trình khuyến mãi | `db_bai37` | `promotions` | `Bai37Promotion` |
| **38** | Đặt phòng khách sạn | `db_bai38` | `bookings` | `Bai38Booking` |
| **39** | Quản lý phương tiện | `db_bai39` | `vehicles` | `Bai39Vehicle` |
| **40** | Quản lý lịch hẹn | `db_bai40` | `appointments` | `Bai40Appointment` |
| **41** | Chi phí dự án | `db_bai41` | `expenses` | `Bai41Expense` |
| **42** | Đăng ký thành viên | `db_bai42` | `members` | `Bai42Member` |
| **43** | Tin bất động sản | `db_bai43` | `real_estates` | `Bai43RealEstate` |
| **44** | Yêu cầu mua hàng | `db_bai44` | `purchase_requests`| `Bai44PurchaseRequest` |
| **45** | Tài sản doanh nghiệp | `db_bai45` | `assets` | `Bai45Asset` |
| **46** | Bài đăng diễn đàn | `db_bai46` | `forum_posts` | `Bai46ForumPost` |
| **47** | Đăng ký dịch vụ | `db_bai47` | `services` | `Bai47Service` |
| **48** | Đề tài nghiên cứu khoa học | `db_bai48` | `research_topics` | `Bai48ResearchTopic` |
| **49** | Đăng ký thực tập | `db_bai49` | `internships` | `Bai49InternshipRegistration` |
| **50** | Bán hàng tổng hợp | `db_bai50` | `sales_products` | `Bai50SaleProduct` |

---

## 🎯 Đáp Ứng 8 Câu Hỏi Trong Từng Đề Bài

Mỗi bài tập giải quyết trọn vẹn 8 yêu cầu thực hành:
1. **Câu 1**: Khởi tạo cấu trúc Laravel, kết nối MySQL và cấu hình kết nối CSDL riêng biệt trong phpMyAdmin.
2. **Câu 2**: Khai báo danh mục các Route RESTful cho danh sách, chi tiết, thêm, sửa, xóa.
3. **Câu 3**: Tạo Controller riêng (`BaiXXController`) triển khai các phương thức xử lý CRUD.
4. **Câu 4**: Xây dựng giao diện Blade dùng chung layout, hiển thị bảng dữ liệu, nút điều hướng và thông báo flash alert.
5. **Câu 5**: Xử lý dữ liệu Request & Validation các ràng buộc đầu vào theo đúng nghiệp vụ đề bài.
6. **Câu 6**: Tạo Migration bảng dữ liệu, Model Eloquent và triển khai lưu/cập nhật dữ liệu.
7. **Câu 7**: Tích hợp Query Builder tìm kiếm theo từ khóa và lọc dữ liệu theo điều kiện nghiệp vụ.
8. **Câu 8**: Tích hợp Middleware quản trị viên: Nút chuyển đổi vai trò **Admin / Khách** ngay trên thanh điều hướng cho phép kiểm thử trực quan luồng phân quyền và ngăn chặn thao tác trái phép (mã 403).
