<?php
// IP ZeroTier của máy bạn bạn (Ví dụ: 10.147.18.25)
$host     = '192.168.193.6';             // <-- Thay IP ZeroTier máy bạn bạn vào đây
$dbname   = 'qlktx';             // <-- Tên Database bạn bạn đã tạo trong phpMyAdmin
$username = 'qlktx_user';               // <-- Tên user MySQL tạo ở Bước 1
$password = '123456';                 // <-- Mật khẩu tạo ở Bước 1
$port     = 3306;

try {
    // Kết nối MySQL bằng PDO (Hỗ trợ tiếng Việt UTF-8)
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);

    // Bỏ comment dòng bên dưới để kiểm tra chạy thử
    // echo "Kết nối thành công đến Database của bạn!";
} catch (PDOException $e) {
    die("Lỗi kết nối CSDL: " . $e->getMessage());
}
?>