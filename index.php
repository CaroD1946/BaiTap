<?php
/**
 * BẢNG ĐIỀU KHIỂN TỔNG HỢP - 50 DỰ ÁN LARAVEL ĐỘC LẬP
 * Truy cập: http://localhost/baitap/
 */

$exercises = [
    [
        "num" => 1,
        "num_str" => "01",
        "title" => "Hệ thống quản lý bài viết tin tức",
        "desc" => "Một tòa soạn cần xây dựng ứng dụng quản lý bài viết. Mỗi bài viết  gồm tiêu đề, nội dung, ảnh đại diện, trạng thái và ngày đăng. Biên tập viên có thể quản  lý bài viết, còn khách truy cập chỉ xem bài viết đã xuất bản.",
        "table" => "posts",
        "model" => "Post",
        "db_name" => "db_bai01"
    ],
    [
        "num" => 2,
        "num_str" => "02",
        "title" => "Hệ thống quản lý sản phẩm",
        "desc" => "Một cửa hàng cần quản lý sản phẩm gồm mã sản phẩm, tên, giá bán,  số lượng tồn kho và hình ảnh. Nhân viên quản lý sản phẩm, khách truy cập được xem  danh sách sản phẩm.",
        "table" => "products",
        "model" => "Product",
        "db_name" => "db_bai02"
    ],
    [
        "num" => 3,
        "num_str" => "03",
        "title" => "Hệ thống quản lý sinh viên",
        "desc" => "Phòng đào tạo cần quản lý sinh viên gồm mã sinh viên, họ tên,  email, ngày sinh và lớp học. Nhân viên được phép cập nhật dữ liệu; người dùng thông  thường chỉ được xem danh sách.",
        "table" => "students",
        "model" => "Student",
        "db_name" => "db_bai03"
    ],
    [
        "num" => 4,
        "num_str" => "04",
        "title" => "Hệ thống quản lý thư viện",
        "desc" => "",
        "table" => "books",
        "model" => "Book",
        "db_name" => "db_bai04"
    ],
    [
        "num" => 5,
        "num_str" => "05",
        "title" => "Hệ thống quản lý đơn hàng",
        "desc" => "Một cửa hàng trực tuyến cần quản lý đơn hàng gồm mã đơn, tên  khách hàng, địa chỉ giao hàng, tổng tiền và trạng thái. Nhân viên có thể theo dõi và cập  nhật trạng thái đơn hàng.",
        "table" => "orders",
        "model" => "Order",
        "db_name" => "db_bai05"
    ],
    [
        "num" => 6,
        "num_str" => "06",
        "title" => "Hệ thống quản lý khóa học",
        "desc" => "Trung tâm đào tạo cần quản lý khóa học gồm tên khóa học, mô tả,  học phí, thời lượng và trạng thái. Nhân viên quản lý khóa học; học viên chỉ xem các  khóa học đang mở.",
        "table" => "courses",
        "model" => "Course",
        "db_name" => "db_bai06"
    ],
    [
        "num" => 7,
        "num_str" => "07",
        "title" => "Hệ thống quản lý nhân viên",
        "desc" => "Một doanh nghiệp cần quản lý nhân viên gồm mã nhân viên, họ tên,  email, phòng ban, lương và trạng thái làm việc. Bộ phận nhân sự quản lý dữ liệu nhân  viên.",
        "table" => "employees",
        "model" => "Employee",
        "db_name" => "db_bai07"
    ],
    [
        "num" => 8,
        "num_str" => "08",
        "title" => "Hệ thống quản lý phòng trọ",
        "desc" => "Chủ nhà cần quản lý phòng trọ gồm mã phòng, diện tích, giá thuê,  trạng thái và mô tả. Người thuê có thể xem danh sách phòng còn trống; chủ nhà quản  lý thông tin phòng.",
        "table" => "rooms",
        "model" => "Room",
        "db_name" => "db_bai08"
    ],
    [
        "num" => 9,
        "num_str" => "09",
        "title" => "Hệ thống quản lý nhà hàng",
        "desc" => "Nhà hàng cần quản lý thực đơn gồm tên món ăn, danh mục, giá, mô  tả và ảnh món ăn. Khách truy cập xem thực đơn; nhân viên quản trị được thêm và cập  nhật món.",
        "table" => "menu_items",
        "model" => "MenuItem",
        "db_name" => "db_bai09"
    ],
    [
        "num" => 10,
        "num_str" => "10",
        "title" => "Hệ thống quản lý phòng khám",
        "desc" => "Phòng khám cần quản lý hồ sơ bệnh nhân gồm mã bệnh nhân, họ  tên, số điện thoại, ngày sinh và ghi chú hành chính. Nhân viên tiếp nhận được quản lý  hồ sơ; khách không được truy cập dữ liệu nội bộ.",
        "table" => "patients",
        "model" => "Patient",
        "db_name" => "db_bai10"
    ],
    [
        "num" => 11,
        "num_str" => "11",
        "title" => "Hệ thống quản lý công việc",
        "desc" => "Nhóm phát triển phần mềm cần quản lý công việc gồm tiêu đề, mô  tả, người phụ trách, hạn hoàn thành và trạng thái. Người dùng đăng nhập để quản lý  công việc được giao.",
        "table" => "tasks",
        "model" => "Task",
        "db_name" => "db_bai11"
    ],
    [
        "num" => 12,
        "num_str" => "12",
        "title" => "Hệ thống quản lý sự kiện",
        "desc" => "Một đơn vị tổ chức sự kiện cần quản lý tên sự kiện, địa điểm, thời  gian, số lượng chỗ và ảnh quảng bá. Khách truy cập xem sự kiện; nhân viên quản lý nội  dung.",
        "table" => "events",
        "model" => "Event",
        "db_name" => "db_bai12"
    ],
    [
        "num" => 13,
        "num_str" => "13",
        "title" => "Hệ thống quản lý bài tập trực tuyến",
        "desc" => "Giảng viên cần tạo bài tập gồm tiêu đề, nội dung, hạn nộp và tệp  đính kèm. Sinh viên xem bài tập; giảng viên quản lý nội dung và tài liệu.",
        "table" => "assignments",
        "model" => "Assignment",
        "db_name" => "db_bai13"
    ],
    [
        "num" => 14,
        "num_str" => "14",
        "title" => "Hệ thống quản lý kho hàng",
        "desc" => "Doanh nghiệp cần quản lý mặt hàng gồm mã hàng, tên hàng, số  lượng tồn, đơn giá và vị trí lưu kho. Nhân viên kho cập nhật số lượng; người xem chỉ  tra cứu thông tin.",
        "table" => "inventory_items",
        "model" => "InventoryItem",
        "db_name" => "db_bai14"
    ],
    [
        "num" => 15,
        "num_str" => "15",
        "title" => "Hệ thống quản lý phản hồi khách hàng",
        "desc" => "Doanh nghiệp cần tiếp nhận phản hồi gồm họ tên, email, chủ đề,  nội dung và trạng thái xử lý. Khách gửi phản hồi; nhân viên đăng nhập để xem và cập  nhật trạng thái.",
        "table" => "feedbacks",
        "model" => "Feedback",
        "db_name" => "db_bai15"
    ],
    [
        "num" => 16,
        "num_str" => "16",
        "title" => "Hệ thống quản lý danh mục sản phẩm",
        "desc" => "Cửa hàng cần quản lý danh mục sản phẩm gồm tên danh mục, mô  tả và trạng thái. Mỗi danh mục có thể chứa nhiều sản phẩm; danh mục đang được sử  dụng không được xóa tùy tiện.",
        "table" => "categories",
        "model" => "Category",
        "db_name" => "db_bai16"
    ],
    [
        "num" => 17,
        "num_str" => "17",
        "title" => "Hệ thống quản lý nhà cung cấp",
        "desc" => "Doanh nghiệp cần lưu thông tin nhà cung cấp gồm mã, tên, email,  số điện thoại, địa chỉ và trạng thái hợp tác. Nhân viên mua hàng quản lý thông tin và  tra cứu nhà cung cấp.",
        "table" => "suppliers",
        "model" => "Supplier",
        "db_name" => "db_bai17"
    ],
    [
        "num" => 18,
        "num_str" => "18",
        "title" => "Hệ thống quản lý phiếu bảo hành",
        "desc" => "Trung tâm bảo hành cần quản lý phiếu bảo hành gồm mã phiếu, sản  phẩm, khách hàng, ngày tiếp nhận và trạng thái xử lý. Nhân viên cập nhật tiến độ bảo  hành.",
        "table" => "warranties",
        "model" => "Warranty",
        "db_name" => "db_bai18"
    ],
    [
        "num" => 19,
        "num_str" => "19",
        "title" => "Hệ thống quản lý tuyển dụng",
        "desc" => "Doanh nghiệp cần quản lý tin tuyển dụng gồm chức danh, mô tả,  mức lương, hạn ứng tuyển và trạng thái. Ứng viên xem tin; nhân viên nhân sự quản lý  nội dung.",
        "table" => "jobs",
        "model" => "Job",
        "db_name" => "db_bai19"
    ],
    [
        "num" => 20,
        "num_str" => "20",
        "title" => "Hệ thống quản lý hóa đơn",
        "desc" => "Doanh nghiệp cần quản lý hóa đơn gồm mã hóa đơn, khách hàng,  ngày lập, tổng tiền và trạng thái thanh toán. Nhân viên kế toán tạo và cập nhật hóa đơn.",
        "table" => "invoices",
        "model" => "Invoice",
        "db_name" => "db_bai20"
    ],
    [
        "num" => 21,
        "num_str" => "21",
        "title" => "Hệ thống quản lý bài đăng tuyển cộng tác viên",
        "desc" => "Một đơn vị cần đăng thông tin tuyển cộng tác viên gồm vị trí, mô  tả công việc, thù lao và hạn đăng ký. Người xem có thể tra cứu; quản trị viên quản lý  bài đăng.",
        "table" => "collaborator_posts",
        "model" => "CollaboratorPost",
        "db_name" => "db_bai21"
    ],
    [
        "num" => 22,
        "num_str" => "22",
        "title" => "Hệ thống quản lý tài liệu nội bộ",
        "desc" => "Doanh nghiệp cần lưu tài liệu gồm tiêu đề, mô tả, tên tệp, người tải  lên và ngày cập nhật. Nhân viên được xem tài liệu theo quyền; quản trị viên được tải  lên và cập nhật tài liệu.",
        "table" => "documents",
        "model" => "Document",
        "db_name" => "db_bai22"
    ],
    [
        "num" => 23,
        "num_str" => "23",
        "title" => "Hệ thống quản lý lịch làm việc",
        "desc" => "Doanh nghiệp cần quản lý lịch làm việc gồm nhân viên, ngày làm,  giờ bắt đầu, giờ kết thúc và ghi chú. Quản lý phân công lịch; nhân viên xem lịch của  mình.",
        "table" => "work_schedules",
        "model" => "WorkSchedule",
        "db_name" => "db_bai23"
    ],
    [
        "num" => 24,
        "num_str" => "24",
        "title" => "Hệ thống quản lý thiết bị",
        "desc" => "Trường học cần quản lý thiết bị gồm mã thiết bị, tên, phòng sử dụng,  ngày mua và trạng thái. Nhân viên quản trị thiết bị có thể cập nhật tình trạng sử dụng.",
        "table" => "equipments",
        "model" => "Equipment",
        "db_name" => "db_bai24"
    ],
    [
        "num" => 25,
        "num_str" => "25",
        "title" => "Hệ thống quản lý yêu cầu hỗ trợ kỹ thuật",
        "desc" => "Một trung tâm CNTT tiếp nhận yêu cầu hỗ trợ gồm người gửi, tiêu  đề, nội dung, mức độ ưu tiên và trạng thái. Người dùng gửi yêu cầu; nhân viên kỹ thuật  xử lý và cập nhật tiến độ.",
        "table" => "support_tickets",
        "model" => "SupportTicket",
        "db_name" => "db_bai25"
    ],
    [
        "num" => 26,
        "num_str" => "26",
        "title" => "Hệ thống quản lý cửa hàng điện thoại",
        "desc" => "Cửa hàng cần quản lý điện thoại gồm tên máy, thương hiệu, giá bán,  số lượng tồn kho và ảnh sản phẩm. Khách xem sản phẩm; nhân viên quản lý danh mục.",
        "table" => "phones",
        "model" => "Phone",
        "db_name" => "db_bai26"
    ],
    [
        "num" => 27,
        "num_str" => "27",
        "title" => "Hệ thống quản lý cửa hàng thời trang",
        "desc" => "Cửa hàng cần quản lý quần áo gồm tên sản phẩm, loại trang phục,  kích cỡ, màu sắc, giá và hình ảnh. Khách xem sản phẩm; nhân viên quản lý dữ liệu.",
        "table" => "fashion_products",
        "model" => "FashionProduct",
        "db_name" => "db_bai27"
    ],
    [
        "num" => 28,
        "num_str" => "28",
        "title" => "Hệ thống quản lý dịch vụ sửa chữa máy tính",
        "desc" => "Cửa hàng sửa chữa máy tính cần quản lý phiếu sửa chữa gồm tên  khách hàng, thiết bị, mô tả lỗi, chi phí dự kiến và trạng thái. Nhân viên cập nhật tình  trạng sửa chữa.",
        "table" => "repair_tickets",
        "model" => "RepairTicket",
        "db_name" => "db_bai28"
    ],
    [
        "num" => 29,
        "num_str" => "29",
        "title" => "Hệ thống quản lý đăng ký học phần",
        "desc" => "Nhà trường cần quản lý học phần gồm mã học phần, tên học phần,  số tín chỉ và số lượng chỗ. Sinh viên có thể xem danh sách; nhân viên quản lý học phần.",
        "table" => "course_sections",
        "model" => "CourseSection",
        "db_name" => "db_bai29"
    ],
    [
        "num" => 30,
        "num_str" => "30",
        "title" => "Hệ thống quản lý đăng ký hội thảo",
        "desc" => "",
        "table" => "workshops",
        "model" => "Workshop",
        "db_name" => "db_bai30"
    ],
    [
        "num" => 31,
        "num_str" => "31",
        "title" => "Hệ thống quản lý công thức nấu ăn",
        "desc" => "Một website ẩm thực cần quản lý công thức gồm tên món, nguyên  liệu, cách chế biến, thời gian nấu và ảnh minh họa. Khách xem công thức; quản trị viên  quản lý nội dung.",
        "table" => "recipes",
        "model" => "Recipe",
        "db_name" => "db_bai31"
    ],
    [
        "num" => 32,
        "num_str" => "32",
        "title" => "Hệ thống quản lý câu hỏi trắc nghiệm",
        "desc" => "Giảng viên cần quản lý câu hỏi gồm nội dung, bốn phương án trả  lời, đáp án đúng và mức độ khó. Sinh viên xem câu hỏi theo chế độ luyện tập; giảng  viên quản lý ngân hàng câu hỏi.",
        "table" => "questions",
        "model" => "Question",
        "db_name" => "db_bai32"
    ],
    [
        "num" => 33,
        "num_str" => "33",
        "title" => "Hệ thống quản lý dự án phần mềm",
        "desc" => "Một nhóm phát triển cần quản lý dự án gồm tên dự án, mô tả, ngày  bắt đầu, hạn hoàn thành và trạng thái. Trưởng nhóm quản lý dự án; thành viên xem các  dự án được phân công.",
        "table" => "projects",
        "model" => "Project",
        "db_name" => "db_bai33"
    ],
    [
        "num" => 34,
        "num_str" => "34",
        "title" => "Hệ thống quản lý khách hàng",
        "desc" => "Bộ phận kinh doanh cần quản lý khách hàng gồm họ tên, email, số  điện thoại, địa chỉ và nguồn khách hàng. Nhân viên kinh doanh tra cứu, thêm mới và  cập nhật hồ sơ.",
        "table" => "customers",
        "model" => "Customer",
        "db_name" => "db_bai34"
    ],
    [
        "num" => 35,
        "num_str" => "35",
        "title" => "Hệ thống quản lý phiếu nhập kho",
        "desc" => "Doanh nghiệp cần quản lý phiếu nhập kho gồm mã phiếu, nhà cung  cấp, ngày nhập, tổng số lượng và ghi chú. Nhân viên kho lập phiếu và theo dõi lịch sử  nhập hàng.",
        "table" => "stock_receipts",
        "model" => "StockReceipt",
        "db_name" => "db_bai35"
    ],
    [
        "num" => 36,
        "num_str" => "36",
        "title" => "Hệ thống quản lý bài đánh giá sản phẩm",
        "desc" => "Website bán hàng cần quản lý đánh giá sản phẩm gồm sản phẩm,  người đánh giá, số sao, nội dung và trạng thái duyệt. Khách gửi đánh giá; quản trị viên  duyệt trước khi hiển thị công khai.",
        "table" => "product_reviews",
        "model" => "ProductReview",
        "db_name" => "db_bai36"
    ],
    [
        "num" => 37,
        "num_str" => "37",
        "title" => "Hệ thống quản lý chương trình khuyến mãi",
        "desc" => "",
        "table" => "promotions",
        "model" => "Promotion",
        "db_name" => "db_bai37"
    ],
    [
        "num" => 38,
        "num_str" => "38",
        "title" => "Hệ thống quản lý đặt phòng khách sạn",
        "desc" => "Khách sạn cần quản lý loại phòng, giá phòng, ngày nhận phòng,  ngày trả phòng và trạng thái đặt phòng. Nhân viên quản lý đặt phòng; khách xem thông  tin phòng.",
        "table" => "bookings",
        "model" => "Booking",
        "db_name" => "db_bai38"
    ],
    [
        "num" => 39,
        "num_str" => "39",
        "title" => "Hệ thống quản lý phương tiện",
        "desc" => "Doanh nghiệp vận tải cần quản lý phương tiện gồm biển số, loại xe, tải  trọng, ngày đăng kiểm và trạng thái hoạt động. Nhân viên quản lý hồ sơ phương tiện.",
        "table" => "vehicles",
        "model" => "Vehicle",
        "db_name" => "db_bai39"
    ],
    [
        "num" => 40,
        "num_str" => "40",
        "title" => "Hệ thống quản lý lịch hẹn",
        "desc" => "Trung tâm dịch vụ cần quản lý lịch hẹn gồm tên khách hàng, số điện  thoại, dịch vụ, ngày giờ và trạng thái. Nhân viên tiếp nhận và cập nhật lịch hẹn.",
        "table" => "appointments",
        "model" => "Appointment",
        "db_name" => "db_bai40"
    ],
    [
        "num" => 41,
        "num_str" => "41",
        "title" => "Hệ thống quản lý chi phí dự án",
        "desc" => "Nhóm dự án cần theo dõi chi phí gồm tên khoản chi, số tiền, ngày  phát sinh, người đề xuất và trạng thái phê duyệt. Nhân viên nhập khoản chi; quản lý  phê duyệt.",
        "table" => "expenses",
        "model" => "Expense",
        "db_name" => "db_bai41"
    ],
    [
        "num" => 42,
        "num_str" => "42",
        "title" => "Hệ thống quản lý đăng ký thành viên",
        "desc" => "Một câu lạc bộ cần quản lý thành viên gồm họ tên, email, ngày tham  gia và trạng thái thành viên. Người dùng đăng ký tài khoản; quản trị viên quản lý danh  sách thành viên.",
        "table" => "members",
        "model" => "Member",
        "db_name" => "db_bai42"
    ],
    [
        "num" => 43,
        "num_str" => "43",
        "title" => "Hệ thống quản lý tin bất động sản",
        "desc" => "Sàn giao dịch cần quản lý tin bất động sản gồm tiêu đề, loại bất  động sản, địa chỉ, diện tích, giá bán và hình ảnh. Khách xem tin; nhân viên quản lý tin  đăng.",
        "table" => "real_estates",
        "model" => "RealEstate",
        "db_name" => "db_bai43"
    ],
    [
        "num" => 44,
        "num_str" => "44",
        "title" => "Hệ thống quản lý yêu cầu mua hàng",
        "desc" => "Doanh nghiệp cần quản lý yêu cầu mua hàng gồm người đề xuất,  tên mặt hàng, số lượng, đơn giá dự kiến và trạng thái phê duyệt. Nhân viên gửi yêu cầu;  quản lý phê duyệt.",
        "table" => "purchase_requests",
        "model" => "PurchaseRequest",
        "db_name" => "db_bai44"
    ],
    [
        "num" => 45,
        "num_str" => "45",
        "title" => "Hệ thống quản lý tài sản doanh nghiệp",
        "desc" => "Doanh nghiệp cần quản lý tài sản gồm mã tài sản, tên, ngày mua,  nguyên giá, phòng ban sử dụng và tình trạng. Nhân viên tài sản cập nhật hồ sơ.",
        "table" => "assets",
        "model" => "Asset",
        "db_name" => "db_bai45"
    ],
    [
        "num" => 46,
        "num_str" => "46",
        "title" => "Hệ thống quản lý bài đăng diễn đàn",
        "desc" => "Một diễn đàn học tập cần quản lý bài đăng gồm tiêu đề, nội dung,  người đăng, danh mục và trạng thái duyệt. Thành viên đăng bài; quản trị viên kiểm  duyệt nội dung.",
        "table" => "forum_posts",
        "model" => "ForumPost",
        "db_name" => "db_bai46"
    ],
    [
        "num" => 47,
        "num_str" => "47",
        "title" => "Hệ thống quản lý đăng ký dịch vụ",
        "desc" => "Một trung tâm dịch vụ cần quản lý dịch vụ gồm tên dịch vụ, giá,  mô tả và trạng thái; đồng thời tiếp nhận đăng ký sử dụng dịch vụ từ khách hàng.",
        "table" => "services",
        "model" => "Service",
        "db_name" => "db_bai47"
    ],
    [
        "num" => 48,
        "num_str" => "48",
        "title" => "Hệ thống quản lý đề tài nghiên cứu khoa học",
        "desc" => "Khoa chuyên môn cần quản lý đề tài nghiên cứu gồm tên đề tài, chủ  nhiệm, lĩnh vực, ngày bắt đầu, ngày kết thúc và trạng thái. Giảng viên đề xuất đề tài;  cán bộ quản lý cập nhật tiến độ.",
        "table" => "research_topics",
        "model" => "ResearchTopic",
        "db_name" => "db_bai48"
    ],
    [
        "num" => 49,
        "num_str" => "49",
        "title" => "Hệ thống quản lý đăng ký thực tập",
        "desc" => "Nhà trường cần quản lý đăng ký thực tập của sinh viên gồm mã sinh  viên, doanh nghiệp, vị trí thực tập, ngày bắt đầu, ngày kết thúc và trạng thái. Sinh viên  gửi đăng ký; cán bộ phụ trách xét duyệt.",
        "table" => "internships",
        "model" => "InternshipRegistration",
        "db_name" => "db_bai49"
    ],
    [
        "num" => 50,
        "num_str" => "50",
        "title" => "Hệ thống quản lý bán hàng tổng hợp",
        "desc" => "Một cửa hàng cần xây dựng ứng dụng quản lý sản phẩm, danh mục  và đơn hàng. Mỗi sản phẩm thuộc một danh mục; mỗi đơn hàng có thông tin khách  hàng và trạng thái xử lý. Nhân viên quản lý toàn bộ nghiệp vụ; khách chỉ được xem sản  phẩm đang kinh doanh.",
        "table" => "sales_products",
        "model" => "SaleProduct",
        "db_name" => "db_bai50"
    ]
];

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
                            Vào thư mục <code>Bai15</code> (hoặc nén zip thư mục <code>Bai15</code>).
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
