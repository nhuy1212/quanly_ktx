<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Hệ Thống Quản Lý Ký Túc Xá'; ?></title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- File CSS riêng -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-slate-50 text-slate-800 flex min-h-screen">

    <!-- Lớp phủ mờ nền khi mở menu trên mobile -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-slate-900/50 z-30 hidden md:hidden"></div>

    <!-- 1. NAVBAR DỌC BÊN TRÁI (SIDEBAR) -->
    <aside id="sidebar-menu" class="w-64 bg-white border-r border-slate-200 flex-shrink-0 flex flex-col justify-between fixed md:sticky top-0 h-screen z-40 transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out">
        <div>
            <!-- Logo Brand -->
            <div class="h-16 flex items-center justify-between px-6 border-b border-slate-100">
    <a href="index.php" class="flex items-center gap-3">
        <!-- Logo hình ảnh từ thư mục assets -->
        <img src="assets/img/logo.png" alt="Logo KTX YT" class="h-10 w-auto object-contain">
        <div>
            <span class="font-bold text-base text-slate-900 tracking-tight block leading-tight">KTX KANTO</span>
        </div>
    </a>
    <!-- Nút đóng menu trên mobile -->
    <button id="close-sidebar-btn" class="md:hidden text-slate-400 hover:text-slate-600">
        <i class="fa-solid fa-xmark text-lg"></i>
    </button>
</div>

            <!-- Menu Links -->
            <nav class="p-4 space-y-1 text-sm font-medium text-slate-600">
                <a href="index.php" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-indigo-50 text-indigo-600 font-semibold transition">
                    <i class="fa-solid fa-house w-5"></i> Trang chủ
                </a>
                <a href="booking.php" class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-slate-100 hover:text-indigo-600 transition">
                    <i class="fa-solid fa-bed w-5"></i> Tra cứu phòng trống
                </a>
                <a href="index.php#notifications" class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-slate-100 hover:text-indigo-600 transition">
                    <i class="fa-solid fa-bullhorn w-5"></i> Thông báo
                </a>
            </nav>
        </div>

        <!-- Quick Info Box ở chân Sidebar -->
        <div class="p-4 border-t border-slate-100">
            <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/60">
                <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider block mb-1">Hỗ trợ sinh viên</span>
                <p class="text-xs text-slate-600 flex items-center gap-2">
                    <i class="fa-solid fa-phone text-indigo-600"></i> 0292.3888.999
                </p>
            </div>
        </div>
    </aside>

    <!-- 2. KHUNG NỘI DUNG BÊN PHẢI (GỒM TOPBAR, CONTENT VÀ FOOTER) -->
    <div class="flex-grow flex flex-col min-w-0">
        
        <!-- TOPBAR PHÍA TRÊN -->
        <header class="bg-white border-b border-slate-200 h-16 flex items-center justify-between px-4 sm:px-6 sticky top-0 z-20 shadow-sm">
            <div class="flex items-center gap-3">
                <!-- Nút Hamburger mở menu trên mobile -->
                <button id="open-sidebar-btn" class="md:hidden text-slate-600 hover:text-indigo-600 p-1.5 rounded-lg border border-slate-200">
                    <i class="fa-solid fa-bars text-lg"></i>
                </button>
                <span class="font-semibold text-slate-800 text-sm md:text-base">Hệ Thống Quản Lý Ký Túc Xá</span>
            </div>

            <!-- User Auth Buttons -->
            <div class="flex items-center space-x-3">
                <?php if (isset($_SESSION['mssv'])): ?>
                    <div class="flex items-center space-x-2">
                        <a href="room.php" class="text-xs font-semibold text-indigo-700 bg-indigo-50 border border-indigo-100 px-3 py-1.5 rounded-lg hover:bg-indigo-100 transition flex items-center gap-2">
                            <i class="fa-solid fa-circle-user text-indigo-600"></i>
                            <span><?php echo htmlspecialchars($_SESSION['ho_ten'] ?? $_SESSION['mssv']); ?></span>
                        </a>
                        <a href="logout.php" title="Đăng xuất" class="text-slate-400 hover:text-rose-600 p-1.5 text-xs transition">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="text-xs font-semibold text-slate-700 hover:text-indigo-600 px-3 py-1.5 rounded-lg hover:bg-slate-100 transition">
                        <i class="fa-solid fa-right-to-bracket mr-1"></i> Đăng nhập
                    </a>
                    <a href="booking.php" class="text-xs font-semibold bg-indigo-600 text-white px-3.5 py-1.5 rounded-lg hover:bg-indigo-700 transition shadow-sm flex items-center gap-1.5">
                        <i class="fa-solid fa-pen-to-square"></i> Đăng ký KTX
                    </a>
                <?php endif; ?>
            </div>
        </header>

        <!-- MAIN VIEWPORT -->
        <main class="flex-grow">