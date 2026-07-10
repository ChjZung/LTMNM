<?php
// ========== XỬ LÝ ĐĂNG KÝ - BACKEND ==========

// Thông tin kết nối MySQL
$host = "localhost";  // Địa chỉ MySQL server
$user = "root";       // Tên user MySQL
$pass = "";           // Mật khẩu MySQL (Laragon mặc định trống)
$db   = "user_db";     // Tên database

// Kết nối MySQL (sử dụng mysqli object-oriented)
// new mysqli(host, user, password, database)
$conn = new mysqli($host, $user, $pass, $db);

// Kiểm tra xem kết nối có lỗi không
if ($conn->connect_error) {
    // Nếu lỗi, dừng và hiển thị thông báo lỗi
    die("Kết nối thất bại: " . $conn->connect_error);
}

// ========== LẤYTHÔNG TIN TỪ FORM ==========
// ?? '' = nếu không có, gán rỗng (để tránh lỗi undefined)
// $_POST['username'] = lấy dữ liệu input "username" từ form
$username = $_POST['username'] ?? '';
$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// ========== KIỂM TRA DỮ LIỆU ==========
// if ($username && $email && $password) = kiểm tra cả 3 không rỗng
if ($username && $email && $password) {
    
    // ========== MÃ HÓA PASSWORD ==========
    // password_hash() = chuyển mật khẩu thành mã hóa (an toàn)
    // PASSWORD_DEFAULT = dùng loại mã hóa mặc định của PHP (hiện là BCRYPT)
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // ========== CHUẨN BỊ SQL QUERY ==========
    // $conn->prepare() = chuẩn bị câu SQL (để chống SQL Injection)
    // ? = placeholder (sẽ được replace bởi bind_param)
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    
    // ========== BIND PARAMETERS ==========
    // bind_param("sss", $username, $email, $hash)
    // "sss" = 3 string parameters
    // s = string, i = integer, d = double, b = blob
    $stmt->bind_param("sss", $username, $email, $hash);

    // ========== EXECUTE QUERY ==========
    // Chạy câu SQL và lưu dữ liệu vào database
    if ($stmt->execute()) {
        // Nếu thành công, hiển thị thông báo
        echo "Đăng ký thành công!";
    } else {
        // Nếu lỗi, hiển thị lỗi
        echo "Lỗi: " . $stmt->error;
    }

    // Đóng statement (giải phóng tài nguyên)
    $stmt->close();
} else {
    // Nếu thiếu dữ liệu, hiển thị thông báo lỗi
    echo "Dữ liệu không hợp lệ!";
}

// Đóng kết nối (giải phóng tài nguyên)
$conn->close();
?>