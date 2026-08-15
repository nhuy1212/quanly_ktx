<?php
// ==========================================
// 1. CẤU HÌNH HỆ THỐNG CHUNG
// ==========================================

// Khởi tạo Session toàn cục
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Khai báo đường dẫn GỐC tuyệt đối của dự án
// Thay đổi nếu bạn đổi tên thư mục gốc trên htdocs/www
define('BASE_URL', '/đồ án 1/quanly_ktx');


// ==========================================
// 2. CẤU HÌNH KẾT NỐI DATABASE (PDO & ZeroTier)
// ==========================================

$host     = '192.168.193.6';       // IP ZeroTier của máy chủ MySQL
$dbname   = 'qlktx';               // Tên Database
$username = 'qlktx_user';          // User MySQL
$password = '123456';              // Mật khẩu
$port     = 3306;

try {
    // Kết nối MySQL bằng PDO (Hỗ trợ tiếng Việt UTF-8)
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);

} catch (PDOException $e) {
    die("Lỗi kết nối CSDL: " . $e->getMessage());
}
?>