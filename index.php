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
    <title>Kho 50 Bài Tập Thực Hành Laravel 11 - Tải File Zip Trực Tiếp</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --secondary: #0ea5e9;
            --bg-body: #f8fafc;
            --card-border: #e2e8f0;
        }
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--bg-body);
            color: #1e293b;
        }
        .header-hero {
            background: linear-gradient(135deg, #1e1b4b 0%, #312e81 40%, #4338ca 100%);
            color: #ffffff;
            border-radius: 20px;
            padding: 36px 32px;
            box-shadow: 0 10px 30px -10px rgba(67, 56, 202, 0.35);
        }
        .badge-l11 {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            font-weight: 700;
            padding: 6px 14px;
            border-radius: 9999px;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.3);
        }
        .search-container {
            background: #ffffff;
            border-radius: 14px;
            padding: 6px;
            box-shadow: 0 4px 20px -2px rgba(0, 0, 0, 0.1);
        }
        .search-input {
            border: none;
            box-shadow: none;
            font-size: 1.05rem;
            padding: 12px 16px;
        }
        .search-input:focus {
            box-shadow: none;
        }
        .card-bai {
            border: 1px solid var(--card-border);
            border-radius: 16px;
            background: #ffffff;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .card-bai:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 28px -8px rgba(15, 23, 42, 0.12);
            border-color: #818cf8;
        }
        .btn-download-zip {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border: none;
            color: #ffffff;
            font-weight: 700;
            padding: 11px 18px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.25);
            transition: all 0.2s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .btn-download-zip:hover {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            color: #ffffff;
            box-shadow: 0 6px 16px rgba(16, 185, 129, 0.4);
            transform: translateY(-1px);
        }
        .tag-pill {
            font-size: 0.78rem;
            padding: 4px 10px;
            border-radius: 6px;
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }
        .tag-db {
            background: #e0f2fe;
            color: #0369a1;
            border: 1px solid #bae6fd;
        }
        .tag-model {
            background: #f1f5f9;
            color: #475569;
            border: 1px solid #e2e8f0;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <div class="container-xl px-3 px-md-4 py-4 flex-grow-1">
        <!-- Top Hero Section -->
        <div class="header-hero mb-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-3">
                <div>
                    <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                        <span class="badge-l11"><i class="bi bi-fire me-1"></i> LARAVEL 11</span>
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill fw-semibold">
                            <i class="bi bi-unlock-fill me-1"></i> Không Cần Đăng Nhập / Đăng Ký
                        </span>
                        <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-semibold">
                            <i class="bi bi-file-earmark-zip-fill me-1"></i> 50 File Zip Sẵn Sàng Tải
                        </span>
                    </div>
                    <h1 class="fw-bold mb-1 fs-3 fs-md-2">Kho Tải 50 Bài Tập Thực Hành Laravel 11</h1>
                    <p class="text-white-50 mb-0 fs-6">
                        Mỗi bài là <strong>1 dự án độc lập</strong> (Model, Controller, Migration, Seeder, Blade). Bấm nút tải về file .zip để nộp bài hoặc chạy thử ngay!
                    </p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <button class="btn btn-light fw-bold text-dark px-3 py-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalHelp">
                        <i class="bi bi-journal-code text-primary me-1"></i> Hướng dẫn chạy bài sau khi tải
                    </button>
                    <a href="https://github.com/CaroD1946/BaiTap" target="_blank" class="btn btn-outline-light px-3 py-2 fw-semibold">
                        <i class="bi bi-github me-1"></i> Kho GitHub
                    </a>
                </div>
            </div>

            <!-- Instant Search & Filter Bar -->
            <div class="row g-2 align-items-center mt-2">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="search-container d-flex align-items-center">
                        <i class="bi bi-search text-muted fs-5 ms-3"></i>
                        <input type="text" id="liveSearchInput" class="form-control search-input" 
                               placeholder="Gõ số đề (vd: 15, 05) hoặc từ khóa (vd: sinh viên, sản phẩm, sách, đơn hàng, hóa đơn...)">
                        <button type="button" id="clearSearchBtn" class="btn btn-sm btn-link text-muted d-none me-2" title="Xóa tìm kiếm">
                            <i class="bi bi-x-circle-fill fs-5"></i>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4">
                    <select id="quickJumpSelect" class="form-select form-select-lg py-2 fs-6 shadow-sm rounded-3 border-0">
                        <option value="">-- Chọn nhanh bài tập (1 đến 50) --</option>
                        <?php foreach ($exercises as $ex): ?>
                            <?php $ns = sprintf('%02d', $ex['num']); ?>
                            <option value="bai-<?= $ns ?>">Đề <?= $ns ?>: <?= htmlspecialchars($ex['title']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            
            <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top border-white border-opacity-10 small text-white-50">
                <span id="resultCounter"><i class="bi bi-check-circle-fill text-success me-1"></i> Đang hiển thị: <strong>50</strong> / 50 bài tập</span>
                <span><i class="bi bi-info-circle me-1"></i> Bấm <strong>TẢI VỀ FILE ZIP</strong> để tải trực tiếp</span>
            </div>
        </div>

        <!-- Exercise Cards Grid -->
        <div class="row g-3" id="exerciseGrid">
            <?php foreach ($exercises as $ex): ?>
                <?php 
                    $numStr = sprintf('%02d', $ex['num']);
                    $folderName = "Bai{$numStr}";
                    $zipName = "Bai{$numStr}.zip";
                    $zipPath = "downloads/{$zipName}";
                    $dbName = $ex['db_name'];
                    $title = $ex['title'];
                    $desc = !empty($ex['desc']) ? $ex['desc'] : "Ứng dụng quản lý {$title} theo chuẩn 8 câu hỏi thực hành Laravel 11 (Routing, Controller, Request Validation, Eloquent CRUD, Query Builder Filter, Middleware, Seeder, Blade UI).";
                    $model = $ex['model'];
                    $table = $ex['table'];
                ?>
                <div class="col-12 col-md-6 col-lg-4 exercise-item" 
                     id="bai-<?= $numStr ?>"
                     data-num="<?= $ex['num'] ?>"
                     data-numstr="<?= $numStr ?>"
                     data-title="<?= htmlspecialchars($title) ?>"
                     data-desc="<?= htmlspecialchars($desc) ?>"
                     data-model="<?= htmlspecialchars($model) ?>"
                     data-table="<?= htmlspecialchars($table) ?>"
                     data-db="<?= htmlspecialchars($dbName) ?>"
                     data-zip="<?= $zipPath ?>">
                    <div class="card-bai p-3">
                        <!-- Header badge -->
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-primary px-3 py-2 rounded-pill fw-bold fs-6">
                                <i class="bi bi-bookmark-star-fill me-1"></i> ĐỀ SỐ <?= $numStr ?>
                            </span>
                            <span class="tag-pill tag-db" title="Database MySQL">
                                <i class="bi bi-database"></i> <?= $dbName ?>
                            </span>
                        </div>

                        <!-- Title -->
                        <h5 class="fw-bold text-dark mb-2 mt-1 fs-6" style="min-height: 40px;">
                            <?= htmlspecialchars($title) ?>
                        </h5>

                        <!-- Description -->
                        <p class="text-muted small mb-3 flex-grow-1" style="min-height: 48px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                            <?= htmlspecialchars($desc) ?>
                        </p>

                        <!-- Tech tags -->
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="tag-pill tag-model"><i class="bi bi-cpu"></i> <?= $model ?></span>
                            <span class="tag-pill tag-model"><i class="bi bi-table"></i> <?= $table ?></span>
                            <span class="badge bg-secondary-subtle text-secondary small py-1 px-2 rounded-pill">
                                Laravel 11.x
                            </span>
                        </div>

                        <!-- Main Download Button -->
                        <a href="<?= $zipPath ?>" download="<?= $zipName ?>" class="btn-download-zip mb-2">
                            <i class="bi bi-cloud-arrow-down-fill fs-5"></i>
                            <span>TẢI VỀ FILE ZIP</span>
                            <small class="opacity-75">(<?= $zipName ?>)</small>
                        </a>

                        <!-- Actions row -->
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top border-light-subtle">
                            <button type="button" class="btn btn-sm btn-outline-secondary btn-view-exam py-1 px-2 border-0 fw-semibold text-primary"
                                    onclick="openExamModal(this)">
                                <i class="bi bi-eye-fill me-1"></i> Xem đề bài
                            </button>
                            <a href="<?= $folderName ?>/public" target="_blank" class="btn btn-sm btn-link text-decoration-none text-muted py-1 px-1 small" title="Chạy thử trên localhost (XAMPP)">
                                <i class="bi bi-play-circle me-1"></i> Chạy localhost
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- No search results -->
        <div id="noResultsMessage" class="text-center py-5 d-none">
            <div class="text-muted fs-1 mb-2"><i class="bi bi-search"></i></div>
            <h5 class="text-muted fw-bold">Không tìm thấy bài tập nào phù hợp</h5>
            <p class="text-muted small">Thử tìm với từ khóa khác như: sinh viên, sản phẩm, sách, hóa đơn hoặc số đề (1 đến 50)...</p>
            <button class="btn btn-primary btn-sm px-4" onclick="resetSearch()">Hiển thị tất cả 50 bài</button>
        </div>
    </div>

    <!-- Modal Xem Chi Tiết Đề Bài -->
    <div class="modal fade" id="examDetailModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white py-3">
                    <div>
                        <span class="badge bg-white text-primary fw-bold me-2" id="modalExamBadge">ĐỀ SỐ XX</span>
                        <span class="badge bg-danger fw-bold">Laravel 11</span>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <h4 class="fw-bold text-dark mb-2" id="modalExamTitle">Tiêu đề bài tập</h4>
                    <p class="text-muted" id="modalExamDesc">Mô tả chi tiết bài tập...</p>

                    <div class="alert alert-light border p-3 mb-4 rounded-3">
                        <div class="row g-2 small">
                            <div class="col-sm-4"><strong>Model Eloquent:</strong> <span class="text-primary fw-bold font-monospace" id="modalExamModel">Model</span></div>
                            <div class="col-sm-4"><strong>Bảng Database:</strong> <span class="text-secondary fw-bold font-monospace" id="modalExamTable">table</span></div>
                            <div class="col-sm-4"><strong>Tên CSDL:</strong> <span class="text-success fw-bold font-monospace" id="modalExamDb">db_baiXX</span></div>
                        </div>
                    </div>

                    <h6 class="fw-bold text-primary mb-3"><i class="bi bi-list-check me-2"></i> 8 Câu Hỏi Yêu Cầu Của Đề Bài Đã Giải Quyết:</h6>
                    <div class="list-group list-group-flush border rounded-3 mb-3 small">
                        <div class="list-group-item d-flex gap-3 py-2">
                            <span class="badge bg-secondary rounded-pill align-self-start">Câu 1</span>
                            <div><strong>Định tuyến (Routing):</strong> Khai báo các Route Web/Resource cho trang chủ, danh sách, thêm mới, sửa, xóa.</div>
                        </div>
                        <div class="list-group-item d-flex gap-3 py-2">
                            <span class="badge bg-secondary rounded-pill align-self-start">Câu 2</span>
                            <div><strong>Controller & View:</strong> Xây dựng Controller xử lý nghiệp vụ và trả về View Blade hiển thị dữ liệu.</div>
                        </div>
                        <div class="list-group-item d-flex gap-3 py-2">
                            <span class="badge bg-secondary rounded-pill align-self-start">Câu 3</span>
                            <div><strong>Validate Request:</strong> Ràng buộc dữ liệu biểu mẫu (bắt buộc, kiểu dữ liệu, độ dài tối thiểu, email, số lượng...).</div>
                        </div>
                        <div class="list-group-item d-flex gap-3 py-2">
                            <span class="badge bg-secondary rounded-pill align-self-start">Câu 4</span>
                            <div><strong>Eloquent ORM & CRUD:</strong> Thực hiện thêm mới, chỉnh sửa, xóa bản ghi bằng Eloquent Model.</div>
                        </div>
                        <div class="list-group-item d-flex gap-3 py-2">
                            <span class="badge bg-secondary rounded-pill align-self-start">Câu 5</span>
                            <div><strong>Query Builder:</strong> Lọc tìm kiếm theo từ khóa và trạng thái, sắp xếp thứ tự và phân trang bản ghi.</div>
                        </div>
                        <div class="list-group-item d-flex gap-3 py-2">
                            <span class="badge bg-secondary rounded-pill align-self-start">Câu 6</span>
                            <div><strong>Middleware:</strong> Kiểm tra phân quyền người dùng (chặn hoặc chuyển hướng nếu không đủ thẩm quyền).</div>
                        </div>
                        <div class="list-group-item d-flex gap-3 py-2">
                            <span class="badge bg-secondary rounded-pill align-self-start">Câu 7</span>
                            <div><strong>Database Seeder:</strong> Khởi tạo ít nhất 10 bản ghi mẫu thực tế cho bảng dữ liệu.</div>
                        </div>
                        <div class="list-group-item d-flex gap-3 py-2">
                            <span class="badge bg-secondary rounded-pill align-self-start">Câu 8</span>
                            <div><strong>Giao diện Blade:</strong> Kế thừa layout chuẩn Bootstrap 5, thông báo Flash Message khi thao tác thành công/thất bại.</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <a href="#" id="modalExamDownloadBtn" download class="btn btn-success fw-bold px-4">
                        <i class="bi bi-cloud-arrow-down-fill me-1"></i> Tải File .Zip Bài Này
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hướng Dẫn Chạy Bài -->
    <div class="modal fade" id="modalHelp" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-dark text-white py-3">
                    <h5 class="modal-title fw-bold"><i class="bi bi-terminal-fill text-warning me-2"></i> Hướng Dẫn Chạy Bài Tập Sau Khi Tải File Zip</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <h6 class="fw-bold text-dark">Sau khi bạn bấm tải file <code>BaiXX.zip</code> về máy:</h6>
                    <ol class="ps-3 mb-3">
                        <li class="mb-2">
                            <strong>Giải nén file zip:</strong> Bạn sẽ nhận được thư mục chuẩn của dự án Laravel 11 (gồm <code>app/</code>, <code>database/</code>, <code>routes/</code>, <code>resources/</code>, <code>composer.json</code>, <code>artisan</code>...).
                        </li>
                        <li class="mb-2">
                            <strong>Bật XAMPP:</strong> Bật Apache và MySQL trong XAMPP Control Panel.
                        </li>
                        <li class="mb-2">
                            <strong>Mở Terminal / PowerShell</strong> tại thư mục vừa giải nén và gõ 5 lệnh:
                            <pre class="bg-dark text-light p-3 rounded-3 mt-2 fs-6"><code># 1. Cài đặt các gói thư viện
composer install

# 2. Tạo file cấu hình môi trường .env
copy .env.example .env

# 3. Tạo APP_KEY cho Laravel
php artisan key:generate

# 4. Tự động tạo Database, Migration & chèn dữ liệu mẫu Seeder
php artisan migrate --seed

# 5. Khởi động Web Server Laravel
php artisan serve</code></pre>
                        </li>
                        <li class="mb-2">
                            Mở trình duyệt truy cập: <a href="http://localhost:8000" target="_blank" class="fw-bold text-primary">http://localhost:8000</a> để xem và nộp bài!
                        </li>
                    </ol>
                    <div class="alert alert-info py-2 small mb-0">
                        <i class="bi bi-lightbulb-fill me-1"></i> <strong>Mẹo nộp bài:</strong> Khi nộp bài cho giảng viên, bạn chỉ cần nộp file <code>BaiXX.zip</code> vừa tải về là xong!
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary px-4" data-bs-dismiss="modal">Đã Hiểu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white border-top py-3 mt-auto">
        <div class="container-xl d-flex flex-wrap justify-content-between align-items-center small text-muted">
            <span><strong>Kho Bài Tập Thực Hành Laravel 11</strong> &copy; 2026. Chuẩn 50 đề ôn tập.</span>
            <span>Tách biệt 50 dự án độc lập <code>Bai01.zip</code> &rarr; <code>Bai50.zip</code></span>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Modal instance
        const examModal = new bootstrap.Modal(document.getElementById('examDetailModal'));

        function openExamModal(btn) {
            const item = btn.closest('.exercise-item');
            const numStr = item.dataset.numstr;
            const title = item.dataset.title;
            const desc = item.dataset.desc;
            const model = item.dataset.model;
            const table = item.dataset.table;
            const db = item.dataset.db;
            const zip = item.dataset.zip;

            document.getElementById('modalExamBadge').textContent = 'ĐỀ SỐ ' + numStr;
            document.getElementById('modalExamTitle').textContent = title;
            document.getElementById('modalExamDesc').textContent = desc;
            document.getElementById('modalExamModel').textContent = model;
            document.getElementById('modalExamTable').textContent = table;
            document.getElementById('modalExamDb').textContent = db;

            const dlBtn = document.getElementById('modalExamDownloadBtn');
            dlBtn.href = zip;
            dlBtn.setAttribute('download', 'Bai' + numStr + '.zip');
            dlBtn.innerHTML = '<i class="bi bi-cloud-arrow-down-fill me-1"></i> Tải File Bai' + numStr + '.zip (Laravel 11)';

            examModal.show();
        }

        // Live Search Filter
        const searchInput = document.getElementById('liveSearchInput');
        const clearBtn = document.getElementById('clearSearchBtn');
        const exerciseItems = document.querySelectorAll('.exercise-item');
        const counterEl = document.getElementById('resultCounter');
        const noResultsMsg = document.getElementById('noResultsMessage');

        searchInput.addEventListener('input', function() {
            const term = this.value.trim().toLowerCase();
            if (term.length > 0) {
                clearBtn.classList.remove('d-none');
            } else {
                clearBtn.classList.add('d-none');
            }
            filterExercises(term);
        });

        clearBtn.addEventListener('click', function() {
            searchInput.value = '';
            clearBtn.classList.add('d-none');
            filterExercises('');
            searchInput.focus();
        });

        function resetSearch() {
            searchInput.value = '';
            clearBtn.classList.add('d-none');
            filterExercises('');
        }

        function filterExercises(term) {
            let visibleCount = 0;
            exerciseItems.forEach(item => {
                const num = item.dataset.num;
                const numStr = item.dataset.numstr;
                const title = item.dataset.title.toLowerCase();
                const desc = item.dataset.desc.toLowerCase();
                const model = item.dataset.model.toLowerCase();
                const table = item.dataset.table.toLowerCase();

                const match = !term || 
                              num === term || 
                              numStr === term ||
                              title.includes(term) || 
                              desc.includes(term) || 
                              model.includes(term) || 
                              table.includes(term);

                if (match) {
                    item.classList.remove('d-none');
                    visibleCount++;
                } else {
                    item.classList.add('d-none');
                }
            });

            counterEl.innerHTML = '<i class="bi bi-check-circle-fill text-success me-1"></i> Đang hiển thị: <strong>' + visibleCount + '</strong> / 50 bài tập';

            if (visibleCount === 0) {
                noResultsMsg.classList.remove('d-none');
            } else {
                noResultsMsg.classList.add('d-none');
            }
        }

        // Quick Jump Select
        document.getElementById('quickJumpSelect').addEventListener('change', function() {
            const targetId = this.value;
            if (!targetId) return;

            resetSearch();
            const targetEl = document.getElementById(targetId);
            if (targetEl) {
                targetEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
                targetEl.querySelector('.card-bai').style.boxShadow = '0 0 0 4px #818cf8';
                setTimeout(() => {
                    targetEl.querySelector('.card-bai').style.boxShadow = '';
                }, 2000);
            }
        });
    </script>
</body>
</html>
