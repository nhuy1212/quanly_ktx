<?php
// Kiểm tra nếu session chưa được khởi tạo thì mới start
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'KTX Kanto — Cổng thông tin'; ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', -apple-system, sans-serif; }
    </style>
</head>
<body class="bg-white text-zinc-800 flex flex-col min-h-screen antialiased selection:bg-zinc-100">

    <!-- NAVIGATION (HEADER) -->
    <header class="border-b border-zinc-100 bg-white sticky top-0 z-40">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <!-- Brand / Logo -->
            <a href="index.php" class="flex items-center gap-3 group">
                <span class="w-8 h-8 rounded-lg bg-zinc-900 text-white font-semibold text-sm flex items-center justify-center tracking-tighter">KTX</span>
                <span class="font-medium text-sm text-zinc-900 tracking-tight">Kanto University</span>
            </a>

            <!-- Menu Links -->
            <nav class="hidden md:flex items-center space-x-8 text-xs font-medium text-zinc-500">
                <a href="index.php" class="hover:text-zinc-900 transition text-zinc-900 font-semibold">Trang chủ</a>
                <a href="booking.php" class="hover:text-zinc-900 transition">Tra cứu phòng</a>
                <a href="index.php#notifications" class="hover:text-zinc-900 transition">Thông báo</a>
                <a href="rules.html" class="hover:text-zinc-900 transition">Quy định</a>
            </nav>

            <!-- User Status / Auth -->
            <div class="flex items-center space-x-4">
                <?php if (isset($_SESSION['mssv'])): ?>
                    <a href="room.php" class="text-xs font-medium text-zinc-900 hover:text-zinc-600 transition">
                        <?php echo htmlspecialchars($_SESSION['ho_ten'] ?? $_SESSION['mssv']); ?>
                    </a>
                    <a href="logout.php" class="text-xs text-zinc-400 hover:text-red-600 transition" title="Đăng xuất">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </a>
                <?php else: ?>
                    <a href="login.php" class="text-xs font-medium text-zinc-500 hover:text-zinc-900 transition">Đăng nhập</a>
                    <a href="booking.php" class="text-xs font-medium bg-zinc-900 text-white px-3.5 py-2 rounded-md hover:bg-zinc-800 transition">
                        Đăng ký lưu trú
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>