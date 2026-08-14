<?php
$page_title = "Trang Chủ - KTX Đại học Kanto";

// Dữ liệu mẫu Thông báo (Có thể thay thế bằng dữ liệu từ MySQL sau này)
$notifications = [
    [
        'id' => 1,
        'tag' => 'Quan trọng',
        'badge_color' => 'bg-amber-100 text-amber-800',
        'title' => 'Thông báo mở đăng ký Ký túc xá Học kỳ I - Năm học 2026-2027',
        'snippet' => 'Hệ thống bắt đầu tiếp nhận đơn đăng ký lưu trú trực tuyến từ ngày 14/08/2026. Sinh viên chuẩn bị ảnh CCCD và giấy tờ ưu tiên...',
        'date' => '14/08/2026',
        'author' => 'Ban quản lý KTX'
    ],
    [
        'id' => 2,
        'tag' => 'Tài chính',
        'badge_color' => 'bg-blue-100 text-blue-800',
        'title' => 'Lịch chốt chỉ số Điện - Nước và phát hóa đơn Tháng 08/2026',
        'snippet' => 'Nhân viên sẽ tiến hành chốt chỉ số từ ngày 28 đến 30. Sinh viên vui lòng kiểm tra hóa đơn trên trang cá nhân và thanh toán qua QR...',
        'date' => '12/08/2026',
        'author' => 'Bộ phận Kế toán'
    ],
    [
        'id' => 3,
        'tag' => 'Sinh hoạt',
        'badge_color' => 'bg-emerald-100 text-emerald-800',
        'title' => 'Kế hoạch bảo trì hệ thống điều hòa tại các dãy nhà B1, B2',
        'snippet' => 'Ban quản lý tiến hành vệ sinh và bảo dưỡng máy lạnh định kỳ. Sinh viên có sự cố thiết bị phát sinh vui lòng gửi báo cáo online...',
        'date' => '10/08/2026',
        'author' => 'Bộ phận Kỹ thuật'
    ]
];

// Nhúng Header & Sidebar trái
require_once 'includes/header.php';
?>

<!-- 1. HERO BANNER SECTION -->
<section class="bg-gradient-to-br from-slate-900 via-indigo-950 to-indigo-900 text-white py-16 px-6 relative overflow-hidden">
    <div class="max-w-4xl mx-auto text-center space-y-5 relative z-10">
        <span class="bg-indigo-500/20 text-indigo-300 text-xs font-semibold px-3.5 py-1.5 rounded-full uppercase tracking-wider border border-indigo-400/30 inline-block">
            Cổng thông tin lưu trú sinh viên
        </span>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
            Không gian sống hiện đại, <br><span class="text-indigo-400">An tâm học tập & Phát triển</span>
        </h1>
        <p class="text-slate-300 text-sm md:text-base max-w-xl mx-auto font-normal leading-relaxed">
            Hệ thống xét duyệt lưu trú trực tuyến. Tra cứu phòng trống, chọn vị trí giường ở và thanh toán điện nước tiện lợi qua mã QR.
        </p>
        <div class="pt-2 flex flex-col sm:flex-row justify-center gap-3">
            <a href="booking.php" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-sm px-5 py-3 rounded-xl shadow-lg shadow-indigo-600/30 transition flex items-center justify-center gap-2">
                <i class="fa-solid fa-magnifying-glass"></i> Tra cứu phòng trống ngay
            </a>
            <a href="rules.html" class="bg-white/10 hover:bg-white/20 text-white border border-white/20 font-semibold text-sm px-5 py-3 rounded-xl transition flex items-center justify-center gap-2">
                <i class="fa-solid fa-file-contract"></i> Quy định & Đơn giá
            </a>
        </div>
    </div>
</section>

<!-- 2. QUICK STATS BAR -->
<section class="max-w-6xl mx-auto px-6 -mt-8 relative z-20">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 bg-white p-5 rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100">
        <div class="text-center p-2 border-r border-slate-100 last:border-0">
            <p class="text-2xl font-extrabold text-indigo-600">4</p>
            <p class="text-xs text-slate-500 font-medium mt-0.5">Dãy Tòa Nhà (A1, A2, B1, B2)</p>
        </div>
        <div class="text-center p-2 border-r border-slate-100 last:border-0">
            <p class="text-2xl font-extrabold text-emerald-600">1,200</p>
            <p class="text-xs text-slate-500 font-medium mt-0.5">Sức Chứa Giường Ở</p>
        </div>
        <div class="text-center p-2 border-r border-slate-100 last:border-0">
            <p class="text-2xl font-extrabold text-amber-500">100%</p>
            <p class="text-xs text-slate-500 font-medium mt-0.5">Thanh Toán QR Tự Động</p>
        </div>
        <div class="text-center p-2">
            <p class="text-2xl font-extrabold text-purple-600">24/7</p>
            <p class="text-xs text-slate-500 font-medium mt-0.5">An Ninh & Hỗ Trợ AI</p>
        </div>
    </div>
</section>

<!-- 3. DANH SÁCH THÔNG BÁO -->
<section id="notifications" class="max-w-6xl mx-auto px-6 py-12">
    <div class="flex justify-between items-end mb-6">
        <div>
            <h2 class="text-xl font-bold text-slate-900">Thông báo từ Ban quản lý</h2>
            <p class="text-xs text-slate-500">Cập nhật tin tức lưu trú và lịch chốt phí mới nhất</p>
        </div>
        <a href="#" class="text-xs font-semibold text-indigo-600 hover:text-indigo-700">Xem tất cả <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        <?php foreach ($notifications as $item): ?>
            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition space-y-3 flex flex-col justify-between">
                <div class="space-y-2.5">
                    <span class="<?php echo $item['badge_color']; ?> text-[10px] font-semibold px-2 py-0.5 rounded-md inline-block">
                        <?php echo htmlspecialchars($item['tag']); ?>
                    </span>
                    <h3 class="font-bold text-sm text-slate-800 hover:text-indigo-600 cursor-pointer transition line-clamp-2">
                        <?php echo htmlspecialchars($item['title']); ?>
                    </h3>
                    <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed">
                        <?php echo htmlspecialchars($item['snippet']); ?>
                    </p>
                </div>
                <div class="text-[11px] text-slate-400 pt-3 border-t border-slate-100 flex items-center justify-between">
                    <span><i class="fa-regular fa-calendar mr-1"></i> <?php echo $item['date']; ?></span>
                    <span><?php echo htmlspecialchars($item['author']); ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
// Nhúng Footer & AI Chatbot
require_once 'includes/footer.php';
?>