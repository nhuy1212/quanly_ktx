</main> <!-- Đóng thẻ main -->

        <!-- 3. FOOTER Ở DƯỚI CÙNG -->
        <footer class="bg-slate-900 text-slate-400 py-8 border-t border-slate-800 mt-auto">
            <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6 text-xs leading-relaxed">
                <div>
                    <h4 class="text-white font-bold text-sm mb-2">BAN QUẢN LÝ KÝ TÚC XÁ</h4>
                    <p>Trường Đại học Kanto - Cần Thơ</p>
                    <p>Địa chỉ: Đường Nguyễn Văn Cừ, Q. Ninh Kiều, TP. Cần Thơ</p>
                </div>
                <div>
                    <h4 class="text-white font-bold text-sm mb-2">LIÊN HỆ TRỰC BAN</h4>
                    <p>Hotline KTX: 0292.3888.999</p>
                    <p>Email: ktx@kanto.edu.vn</p>
                </div>
                <div>
                    <h4 class="text-white font-bold text-sm mb-2">ĐỒ ÁN HỌC PHẦN</h4>
                    <p>© 2026 Đồ án 1 - Web Quản lý Ký túc xá Tích hợp AI.</p>
                </div>
            </div>
        </footer>

    </div> <!-- Đóng thẻ div bao bọc cột phải -->

    <!-- 4. AI CHATBOT WIDGET -->
    <div class="fixed bottom-6 right-6 z-50">
        <button id="chatbot-toggle" class="bg-indigo-600 hover:bg-indigo-700 text-white w-12 h-12 rounded-full shadow-2xl flex items-center justify-center text-xl transition-transform hover:scale-110">
            <i class="fa-solid fa-robot"></i>
        </button>

        <div id="chatbot-window" class="hidden absolute bottom-16 right-0 w-80 sm:w-96 bg-white rounded-2xl shadow-2xl border border-slate-200 overflow-hidden flex flex-col h-[450px]">
            <div class="bg-indigo-600 text-white p-4 flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-robot text-lg"></i>
                    <div>
                        <h4 class="font-bold text-sm">Trợ lý AI KTX</h4>
                        <span class="text-[10px] text-indigo-200 flex items-center gap-1">
                            <span class="w-1.5 h-1.5 bg-emerald-400 rounded-full inline-block"></span> Tự động trả lời 24/7
                        </span>
                    </div>
                </div>
                <button id="chatbot-close" class="text-indigo-200 hover:text-white"><i class="fa-solid fa-xmark text-lg"></i></button>
            </div>

            <div id="chat-messages" class="flex-grow p-4 overflow-y-auto space-y-3 bg-slate-50 text-xs">
                <div class="bg-white p-3 rounded-2xl rounded-tl-none border border-slate-200 max-w-[85%] shadow-sm leading-relaxed">
                    Xin chào! Tôi là Trợ lý AI KTX. Bạn cần tư vấn về thủ tục đăng ký, quy định hay đơn giá điện nước?
                </div>
            </div>

            <form id="chat-form" class="p-3 bg-white border-t border-slate-200 flex gap-2">
                <input type="text" id="chat-input" placeholder="Nhập câu hỏi..." class="flex-grow text-xs border border-slate-300 rounded-lg px-3 py-2 focus:outline-none focus:border-indigo-600">
                <button type="submit" class="bg-indigo-600 text-white px-3 py-2 rounded-lg text-xs hover:bg-indigo-700 transition">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- JAVASCRIPT ĐIỀU KHIỂN -->
    <script>
        // 1. Điều khiển Mobile Sidebar
        const sidebar = document.getElementById('sidebar-menu');
        const overlay = document.getElementById('sidebar-overlay');
        const openSidebarBtn = document.getElementById('open-sidebar-btn');
        const closeSidebarBtn = document.getElementById('close-sidebar-btn');

        if (openSidebarBtn) {
            openSidebarBtn.addEventListener('click', () => {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
            });
        }

        const hideSidebar = () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        };

        if (closeSidebarBtn) closeSidebarBtn.addEventListener('click', hideSidebar);
        if (overlay) overlay.addEventListener('click', hideSidebar);

        // 2. Điều khiển AI Chatbot
        const toggleBtn = document.getElementById('chatbot-toggle');
        const closeBtn = document.getElementById('chatbot-close');
        const chatWindow = document.getElementById('chatbot-window');
        const chatForm = document.getElementById('chat-form');
        const chatInput = document.getElementById('chat-input');
        const chatMessages = document.getElementById('chat-messages');

        if (toggleBtn) {
            toggleBtn.addEventListener('click', () => chatWindow.classList.toggle('hidden'));
            closeBtn.addEventListener('click', () => chatWindow.classList.add('hidden'));

            chatForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const text = chatInput.value.trim();
                if (!text) return;

                const userMsg = document.createElement('div');
                userMsg.className = "bg-indigo-600 text-white p-3 rounded-2xl rounded-tr-none max-w-[85%] ml-auto shadow-sm text-xs leading-relaxed";
                userMsg.textContent = text;
                chatMessages.appendChild(userMsg);

                chatInput.value = '';
                chatMessages.scrollTop = chatMessages.scrollHeight;

                setTimeout(() => {
                    const botMsg = document.createElement('div');
                    botMsg.className = "bg-white p-3 rounded-2xl rounded-tl-none border border-slate-200 max-w-[85%] shadow-sm text-xs leading-relaxed";
                    botMsg.textContent = "Cảm ơn bạn đã hỏi. Tính năng AI đang kết nối API để phản hồi chi tiết cho bạn!";
                    chatMessages.appendChild(botMsg);
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }, 600);
            });
        }
    </script>
</body>
</html>