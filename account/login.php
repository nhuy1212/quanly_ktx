<?php
// 1. GỌI DB.PHP ĐẦU TIÊN để dùng được $pdo, session và BASE_URL


$page_title = "Đăng Nhập - KTX Đại học Kanto";
$error = '';

// 2. XỬ LÝ LOGIC ĐĂNG NHẬP (Phải nằm trước phần HTML)
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    try {
        // LƯU Ý: Bạn cần thay tên bảng 'sinh_vien' và các cột 'mssv', 'mat_khau' 
        // cho đúng với thiết kế trong CSDL 'qlktx' của bạn.
        $sql = "SELECT * FROM sinh_vien WHERE mssv = :username LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        // Kiểm tra mật khẩu (Nếu trong DB bạn lưu mật khẩu thường không mã hóa)
        if ($user && $user['mat_khau'] === $password) { 
            
            // Đăng nhập thành công -> Lưu Session
            $_SESSION['mssv'] = $user['mssv'];
            $_SESSION['ho_ten'] = $user['ho_ten']; // Đổi 'ho_ten' theo cột thực tế
            
            // Chuyển hướng an toàn về trang chủ
            header("Location: " . BASE_URL . "/index.php");
            exit();
        } else {
            $error = 'Tên đăng nhập hoặc mật khẩu không chính xác!';
        }
    } catch (PDOException $e) {
        // Bắt lỗi nếu gõ sai tên bảng/cột
        $error = 'Lỗi truy vấn CSDL: ' . $e->getMessage();
    }
}

// 3. NHÚNG HEADER (Bắt đầu xuất giao diện)
require_once '../includes/header.php';
?>

<!-- NỘI DUNG CHÍNH: FORM ĐĂNG NHẬP -->
<div class="flex items-center justify-center min-h-[calc(100vh-130px)] py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-6 bg-white p-8 rounded-2xl shadow-sm border border-slate-200">
        
        <div class="text-center">
            <h2 class="text-2xl font-bold tracking-tight text-slate-900">Đăng nhập hệ thống</h2>
        </div>

        <?php if ($error): ?>
            <div class="bg-rose-50 text-rose-600 p-3 rounded-lg text-sm text-center border border-rose-100 font-medium">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <form class="space-y-5" method="POST">
            <div>
                <label for="username" class="block text-sm font-medium text-slate-700 mb-1">Tên đăng nhập / MSSV</label>
                <input id="username" name="username" type="text" required 
                       class="appearance-none block w-full px-4 py-2.5 border border-slate-300 placeholder-slate-400 text-slate-900 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-sm transition" 
                       placeholder="Nhập tài khoản của bạn...">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Mật khẩu</label>
                <input id="password" name="password" type="password" required 
                       class="appearance-none block w-full px-4 py-2.5 border border-slate-300 placeholder-slate-400 text-slate-900 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-sm transition" 
                       placeholder="••••••••">
            </div>

            <button type="submit" name="login" 
                    class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none transition shadow-md">
                Đăng nhập
            </button>
        </form>
    </div>
</div>

<?php
// 4. NHÚNG FOOTER
require_once '../includes/footer.php';
?>