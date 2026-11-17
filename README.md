# Hệ Thống 50 Dự Án Laravel Độc Lập - Ôn Tập Môn Thực Hành

Dự án được cấu trúc đặc biệt theo đúng yêu cầu: **chia mỗi bài tập thành 1 dự án Laravel độc lập riêng biệt** (từ thư mục `Bai01/` đến `Bai50/`). Khi cần nộp bài tập, bạn chỉ cần chọn đúng thư mục bài đó (ví dụ `Bai15`) để nén zip và nộp bài, không cần phải tải hay nộp toàn bộ 50 bài!

---

## 🌟 Điểm Nổi Bật

1. **50 Dự án Laravel độc lập (`Bai01` &rarr; `Bai50`):**
   - Mỗi thư mục chứa đầy đủ mã nguồn Laravel chuẩn: `artisan`, `composer.json`, `.env.example`, `app/`, `database/`, `resources/views/`, `routes/`, `public/`.
   - Controller và Model được đặt tên chuẩn chỉnh theo đúng câu hỏi trong đề PDF: `PostController` & `Post` (Đề 1), `ProductController` & `Product` (Đề 2), `StudentController` & `Student` (Đề 3), v.v.
   - Migration và Seeder nạp sẵn dữ liệu mẫu thực tế.

2. **Cơ sở dữ liệu riêng biệt trên MySQL & phpMyAdmin:**
   - 50 Database độc lập tương ứng: `db_bai01`, `db_bai02`, ..., `db_bai50`.
   - Xem trực tiếp cấu trúc từng CSDL tại: [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).

3. **UI Tổng & Điều hướng qua lại mượt mà:**
   - **UI Tổng (`index.php`)**: Truy cập tại [http://localhost/baitap/](http://localhost/baitap/) để xem danh sách 50 dự án, tìm kiếm nhanh và mở bất kỳ bài nào.
   - **Điều hướng nhanh trên từng bài**: Thanh navbar của mỗi bài có nút **`[◀ Bài trước]`**, **`[Dropdown 50 bài]`**, **`[🏠 UI Tổng]`**, **`[Bài tiếp theo ▶]`**, **`[🗄️ phpMyAdmin]`**, **`[👤 Quyền Admin / Khách (Câu 8)]`**.

---

## 🚀 Cách Chạy & Kiểm Thử Trên XAMPP

### Cách 1: Chạy trực tiếp qua Apache của XAMPP (Tiện lợi nhất)
Dự án đã được liên kết với `htdocs` của XAMPP:
- **UI Tổng (Danh sách 50 bài):** [http://localhost/baitap/](http://localhost/baitap/)
- **Chạy Đề số 1:** [http://localhost/baitap/Bai01/public](http://localhost/baitap/Bai01/public)
- **Chạy Đề số 2:** [http://localhost/baitap/Bai02/public](http://localhost/baitap/Bai02/public)
- **... Chạy Đề số 50:** [http://localhost/baitap/Bai50/public](http://localhost/baitap/Bai50/public)

### Cách 2: Chạy độc lập bằng Laravel Artisan Serve
Vào bất kỳ thư mục bài nào bạn muốn chạy:
```powershell
cd C:\Users\Drago\Desktop\BaiTap\Bai15
php artisan serve --port=8000
```
Truy cập tại: [http://127.0.0.1:8000/](http://127.0.0.1:8000/)

---

## 📦 Hướng Dẫn Tách Lẻ & Nộp 1 Bài Cụ Thể (Ví dụ Đề 15)

Khi giảng viên yêu cầu nộp một bài cụ thể (ví dụ Đề số 15):
1. Bạn chỉ cần vào thư mục `Bai15` (hoặc click chuột phải chọn **Send to &rarr; Compressed (zipped) folder**).
2. Thư mục `Bai15` chứa trọn vẹn:
   - `app/Http/Controllers/FeedbackController.php` (Câu 3)
   - `app/Models/Feedback.php` (Câu 6)
   - `database/migrations/2026_01_01_000000_create_feedbacks_table.php` (Câu 6)
   - `database/seeders/DatabaseSeeder.php`
   - `resources/views/feedbacks/index.blade.php`, `create.blade.php`, `edit.blade.php`, `show.blade.php` (Câu 4)
   - `routes/web.php` (Câu 2)
   - `.env.example` cấu hình sẵn database `db_bai15` (Câu 1)
   - `composer.json`, `artisan`
3. Khi giảng viên mở bài ra chấm, chỉ cần chạy:
   ```bash
   composer install
   copy .env.example .env
   php artisan key:generate
   php artisan migrate --seed
   php artisan serve
   ```

---

## 📋 Danh Sách 50 Thư Mục Dự Án Độc Lập

| Thư mục | Đề thi | Tên nghiệp vụ | Cơ sở dữ liệu | Bảng chính | Model | Controller |
|:---|:---|:---|:---|:---|:---|:---|
| `Bai01/` | Đề 01 | Quản lý bài viết tin tức | `db_bai01` | `posts` | `Post` | `PostController` |
| `Bai02/` | Đề 02 | Quản lý sản phẩm | `db_bai02` | `products` | `Product` | `ProductController` |
| `Bai03/` | Đề 03 | Quản lý sinh viên | `db_bai03` | `students` | `Student` | `StudentController` |
| `Bai04/` | Đề 04 | Quản lý thư viện | `db_bai04` | `books` | `Book` | `BookController` |
| `Bai05/` | Đề 05 | Quản lý đơn hàng | `db_bai05` | `orders` | `Order` | `OrderController` |
| `Bai06/` | Đề 06 | Quản lý khóa học | `db_bai06` | `courses` | `Course` | `CourseController` |
| `Bai07/` | Đề 07 | Quản lý nhân viên | `db_bai07` | `employees` | `Employee` | `EmployeeController` |
| `Bai08/` | Đề 08 | Quản lý phòng trọ | `db_bai08` | `rooms` | `Room` | `RoomController` |
| `Bai09/` | Đề 09 | Quản lý nhà hàng | `db_bai09` | `menu_items` | `MenuItem` | `MenuItemController` |
| `Bai10/` | Đề 10 | Quản lý phòng khám | `db_bai10` | `patients` | `Patient` | `PatientController` |
| `Bai11/` | Đề 11 | Quản lý công việc | `db_bai11` | `tasks` | `Task` | `TaskController` |
| `Bai12/` | Đề 12 | Quản lý sự kiện | `db_bai12` | `events` | `Event` | `EventController` |
| `Bai13/` | Đề 13 | Quản lý bài tập trực tuyến | `db_bai13` | `assignments` | `Assignment` | `AssignmentController` |
| `Bai14/` | Đề 14 | Quản lý kho hàng | `db_bai14` | `inventory_items` | `InventoryItem` | `InventoryItemController`|
| `Bai15/` | Đề 15 | Phản hồi khách hàng | `db_bai15` | `feedbacks` | `Feedback` | `FeedbackController` |
| `Bai16/` | Đề 16 | Danh mục sản phẩm | `db_bai16` | `categories` | `Category` | `CategoryController` |
| `Bai17/` | Đề 17 | Nhà cung cấp | `db_bai17` | `suppliers` | `Supplier` | `SupplierController` |
| `Bai18/` | Đề 18 | Phiếu bảo hành | `db_bai18` | `warranties` | `Warranty` | `WarrantyController` |
| `Bai19/` | Đề 19 | Tuyển dụng | `db_bai19` | `jobs` | `Job` | `JobController` |
| `Bai20/` | Đề 20 | Hóa đơn | `db_bai20` | `invoices` | `Invoice` | `InvoiceController` |
| `Bai21/` | Đề 21 | Tuyển cộng tác viên | `db_bai21` | `collaborator_posts`| `CollaboratorPost` | `CollaboratorPostController` |
| `Bai22/` | Đề 22 | Tài liệu nội bộ | `db_bai22` | `documents` | `Document` | `DocumentController` |
| `Bai23/` | Đề 23 | Lịch làm việc | `db_bai23` | `work_schedules` | `WorkSchedule` | `WorkScheduleController` |
| `Bai24/` | Đề 24 | Thiết bị | `db_bai24` | `equipments` | `Equipment` | `EquipmentController` |
| `Bai25/` | Đề 25 | Hỗ trợ kỹ thuật | `db_bai25` | `support_tickets` | `SupportTicket` | `SupportTicketController` |
| `Bai26/` | Đề 26 | Cửa hàng điện thoại | `db_bai26` | `phones` | `Phone` | `PhoneController` |
| `Bai27/` | Đề 27 | Cửa hàng thời trang | `db_bai27` | `fashion_products`| `FashionProduct` | `FashionProductController` |
| `Bai28/` | Đề 28 | Sửa chữa máy tính | `db_bai28` | `repair_tickets` | `RepairTicket` | `RepairTicketController` |
| `Bai29/` | Đề 29 | Đăng ký học phần | `db_bai29` | `course_sections` | `CourseSection` | `CourseSectionController` |
| `Bai30/` | Đề 30 | Đăng ký hội thảo | `db_bai30` | `workshops` | `Workshop` | `WorkshopController` |
| `Bai31/` | Đề 31 | Công thức nấu ăn | `db_bai31` | `recipes` | `Recipe` | `RecipeController` |
| `Bai32/` | Đề 32 | Câu hỏi trắc nghiệm | `db_bai32` | `questions` | `Question` | `QuestionController` |
| `Bai33/` | Đề 33 | Dự án phần mềm | `db_bai33` | `projects` | `Project` | `ProjectController` |
| `Bai34/` | Đề 34 | Quản lý khách hàng | `db_bai34` | `customers` | `Customer` | `CustomerController` |
| `Bai35/` | Đề 35 | Phiếu nhập kho | `db_bai35` | `stock_receipts` | `StockReceipt` | `StockReceiptController` |
| `Bai36/` | Đề 36 | Đánh giá sản phẩm | `db_bai36` | `product_reviews` | `ProductReview` | `ProductReviewController` |
| `Bai37/` | Đề 37 | Chương trình khuyến mãi | `db_bai37` | `promotions` | `Promotion` | `PromotionController` |
| `Bai38/` | Đề 38 | Đặt phòng khách sạn | `db_bai38` | `bookings` | `Booking` | `BookingController` |
| `Bai39/` | Đề 39 | Quản lý phương tiện | `db_bai39` | `vehicles` | `Vehicle` | `VehicleController` |
| `Bai40/` | Đề 40 | Quản lý lịch hẹn | `db_bai40` | `appointments` | `Appointment` | `AppointmentController` |
| `Bai41/` | Đề 41 | Chi phí dự án | `db_bai41` | `expenses` | `Expense` | `ExpenseController` |
| `Bai42/` | Đề 42 | Đăng ký thành viên | `db_bai42` | `members` | `Member` | `MemberController` |
| `Bai43/` | Đề 43 | Tin bất động sản | `db_bai43` | `real_estates` | `RealEstate` | `RealEstateController` |
| `Bai44/` | Đề 44 | Yêu cầu mua hàng | `db_bai44` | `purchase_requests`| `PurchaseRequest` | `PurchaseRequestController` |
| `Bai45/` | Đề 45 | Tài sản doanh nghiệp | `db_bai45` | `assets` | `Asset` | `AssetController` |
| `Bai46/` | Đề 46 | Bài đăng diễn đàn | `db_bai46` | `forum_posts` | `ForumPost` | `ForumPostController` |
| `Bai47/` | Đề 47 | Đăng ký dịch vụ | `db_bai47` | `services` | `Service` | `ServiceController` |
| `Bai48/` | Đề 48 | Đề tài nghiên cứu | `db_bai48` | `research_topics` | `ResearchTopic` | `ResearchTopicController` |
| `Bai49/` | Đề 49 | Đăng ký thực tập | `db_bai49` | `internships` | `InternshipRegistration` | `InternshipRegistrationController` |
| `Bai50/` | Đề 50 | Bán hàng tổng hợp | `db_bai50` | `sales_products` | `SaleProduct` | `SaleProductController` |
