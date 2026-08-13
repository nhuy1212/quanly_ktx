<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Quản lý ký túc xá</title>

    <link rel="stylesheet" href="css/admin.css">
</head>

<body>

    <!-- SIDEBAR -->
    <div class="menu_right">

        <div class="sidebar-logo">
            <img src="img/logo.png" alt="Logo">
            <span>KTX ADMIN</span>
        </div>

        <nav class="sidebar-menu">

            <a href="#" class="active">
                <span>Bảng điều khiển</span>
            </a>
            <a href="#">
                <span>Phòng</span>
            </a>
            <a href="#">
                <span>Sinh Viên</span>
            </a>
        </nav>

</div>


    <!-- NỘI DUNG CHÍNH -->
    <main class="main">

        <!-- HEADER -->
        <header class="topbar">

            <h2>HỆ THỐNG QUẢN LÝ KÝ TÚC XÁ</h2>

            <div class="user">
                <span>Xin chào, <!--biến--></span>
                <a href="#">Đăng xuất</a>
            </div>

        </header>


        <!-- CONTENT -->
        <section class="content">

        <h1>Bảng điều khiển</h1>
        <p class="welcome">
            Chào mừng bạn đến với hệ thống quản lý ký túc xá
        </p>



            <!-- THỐNG KÊ -->
<!-- ?php   ?-->
        <div class="cards">

            <div class="card">
                <h3>Tòa</h3>
                <p></p>
                <span>..........</span>
            </div>

            <div class="card">
                <h3>Số Phòng</h3>
                <p>120</p>
                <span></span>
            </div>

            <div class="card">
                <h3>Sinh viên</h3>
                <p>850</p>
                <span>Hiện có</span>
            </div>

            <div class="card">
                <h3></h3>
                <p>#</p>
                <span>#</span>
            </div>
<!--?php endforeach; ?-->

            </div>


            <!-- KHU VỰC THÔNG TIN -->
            <div class="dashboard">

            <div class="panel">
                <h2>Thông tin phòng</h2>
                <table>
<!--thông tin-->
<!--?php endforeach; ?-->
            <tr>
                <th>Số Phòng</th>
                <th>Số lượng</th>
            </tr>
<!--?php endforeach; ?-->
<!-- ?php   ?-->
            <tr>
                <td><!--biến--></td>
                <td><!--biến--></td>
                <td><!--biến--></td>
                <td><!--biến--></td>
                <td class="trangthai"></td>
            </tr>
<!--?php endforeach; ?-->
</table>

            </div>
            </div>
        </section>
    </main>
</body>



</html>