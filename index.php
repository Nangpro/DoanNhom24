<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .nav-container {
            text-align: right;
        }

        header, nav, main, footer {
            width: 100%;
            max-width: 1200px;
            margin: 20px 0;
        }

        nav ul {
            display: flex;
            justify-content: center;
            background-color: #f5f5f5;
            padding: 10px;
        }

        nav li {
            margin: 0 10px;
            list-style-type: none;
        }
        nav li a {
            text-decoration: none;
            color: red;
            font-weight: bold;
        }
        .content-container {
            background-color: #f5f5f5;
            padding: 20px;
            margin-top: 20px;
            width: 100%;
            max-width: 1200px;
        }

        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        section {
            width: 48%; /* 48% để chúng nằm cạnh nhau, có thể điều chỉnh tùy ý */
            margin-bottom: 20px;
            margin-top: 20px;
            display: inline-block; /* Để chúng nằm cạnh nhau */
        }

        section img {
            width: 100%;
            height: auto; /* Đảm bảo ảnh không bị méo */
            border-radius: 8px; /* Bo tròn góc ảnh */
        }

        section h3 {
            color: #007bff; /* Màu chữ */
            margin-top: 10px; /* Khoảng cách giữa hình ảnh và tiêu đề */
        }

        section p {
            color: #555; 
            font-size: 16px; 
        }

        section a {
            text-decoration: none; /* Loại bỏ gạch chân dưới của liên kết */
            color: #28a745; /* Màu chữ xanh lá cây */
            font-weight: bold; /* Chữ đậm */
        }

        section a:hover {
            text-decoration: underline; /* Gạch chân dưới khi di chuột qua */
        }

        footer {
            display: flex;
            justify-content: center;
        }
        .banner {
            width: 100%;
            height: 200px;
            background-color: #f1f1f1;
            text-align: center;
        }

        .banner img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        footer {
            background-color: #e1e6d3; /* Màu nền của footer */
            padding: 20px;
            color: #333; /* Màu chữ chính */
        }

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info h4 {
            color: #007bff; /* Màu chữ xanh da trời */
        }
        #admin{
            text-align: right;
            display: inline-block;
            margin-right: 20px; /* Khoảng cách giữa các nút */
            text-decoration: none;
            color: black; /* Màu chữ */
            font-weight: bold;
            margin-right: 5px;
        }
        .logo{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>

</head>
<body>
    <header>
        <div class="logo">
        <img src="images/logo2.png" alt="logo" width="150" height="150">
        <a class="nav-link" id="admin" href="./admin/admin.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            </svg>
            Admin
        </a>
        </div>


    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main_products.php">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Liên hệ</a>
                </li>
            </ul>

        

            <!-- Giỏ hàng -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M3.08 1.5h12l1.02 4.921a.5.5 0 0 1-.105.447L14.02 11H3.979L2.434 2.868a.5.5 0 0 0-.474-.368L3.08 1.5zM1 12.5a.5.5 0 0 0 1 0v-8a.5.5 0 0 0-1 0v8zm14 0a.5.5 0 0 0 1 0v-8a.5.5 0 0 0-1 0v8zM4 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                        Giỏ hàng
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <main>


    <!-- Carousel Bootstrap để hiển thị banner -->
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner.jpg" class="d-block w-100" alt="Banner">
            </div>
            <div class="carousel-item">
                <img src="images/banner1.jpg" class="d-block w-100" alt="Banner1">
            </div>
            <div class="carousel-item">
                <img src="images/banner2.jpg" class="d-block w-100" alt="Banner2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h3 class="mt-3">Chào mừng đến với trang web Bán Hàng Thực Phẩm</h3>
    <p>Hãy khám phá các sản phẩm phong phú và đa dạng với giá cả hợp lý.</p>

        <section id="products">
            <h2>Sản Phẩm Nổi Bật</h2>
            <?php
            // Kết nối đến CSDL
            $conn = mysqli_connect('localhost', 'root', '', 'doanchuyennganh');

            // Kiểm tra kết nối
            if (!$conn) {
                die("Kết nối đến CSDL thất bại: " . mysqli_connect_error());
            }

            // Truy vấn CSDL để lấy danh sách sản phẩm
            $query = "SELECT * FROM SanPham";
            $result = mysqli_query($conn, $query);

            // Kiểm tra và hiển thị danh sách sản phẩm
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='product'>";
                    echo "<img src='" . $row['hinh_anh'] . "' alt='" . $row['ten'] . "'>";
                    echo "<h4>" . $row['ten'] . "</h4>";
                    echo "<a href='product_detail.php?id=" . $row['id'] . "'>Xem chi tiết</a>";
                    echo "</div>";
                }
            } else {
                echo "Không có sản phẩm.";
            }

            // Đóng kết nối
            mysqli_close($conn);
            ?>
        </section>
        <section id="products2">
            <h2>Sản Phẩm Mới</h2>
            <?php
            // Kết nối đến CSDL
            $conn = mysqli_connect('localhost', 'root', '', 'doanchuyennganh');

            // Kiểm tra kết nối
            if (!$conn) {
                die("Kết nối đến CSDL thất bại: " . mysqli_connect_error());
            }

            // Truy vấn CSDL để lấy danh sách sản phẩm
            $query = "SELECT * FROM SanPham";
            $result = mysqli_query($conn, $query);

            // Kiểm tra và hiển thị danh sách sản phẩm
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='product'>";
                    echo "<img src='" . $row['hinh_anh'] . "' alt='" . $row['ten'] . "'>";
                    echo "<h4>" . $row['ten'] . "</h4>";
                    echo "<a href='product_detail.php?id=" . $row['id'] . "'>Xem chi tiết</a>";
                    echo "</div>";
                }
            } else {
                echo "Không có sản phẩm.";
            }

            // Đóng kết nối
            mysqli_close($conn);
            ?>
        </section>
        <section id="news">
            <h2>Tin tức mới nhất</h2>
            <?php
            // Kết nối đến CSDL
            $conn = mysqli_connect('localhost', 'root', '', 'doanchuyennganh');

            // Kiểm tra kết nối
            if (!$conn) {
                die("Kết nối đến CSDL thất bại: " . mysqli_connect_error());
            }

            // Truy vấn CSDL để lấy danh sách tin tức mới nhất
            $query = "SELECT * FROM TinTuc ORDER BY ngay_dang DESC LIMIT 5"; // Giới hạn lấy 5 tin tức mới nhất
            $result = mysqli_query($conn, $query);

            // Kiểm tra và hiển thị danh sách tin tức mới nhất
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<article>";
                    echo "<h3><a href='news_detail.php?id=" . $row['id'] . "'>" . $row['tieu_de'] . "</a></h3>";
                    echo "<p>Ngày đăng: " . $row['ngay_dang'] . "</p>";
                    echo "</article>";
                }
            } else {
                echo "Không có tin tức.";
            }

            // Đóng kết nối
            mysqli_close($conn);
            ?>
        </section>
    </main>
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-info">
                    <h4>Thông tin liên hệ</h4>
                    <p>Địa chỉ: 182 Lê Duẩn - Thành phố Vinh - tỉnh Nghệ An</p>
                    <p>Điện thoại: 0123456789</p>
                    <p>Email: <a href="#">pvp123@gmail.com</a> or <a href="#">nangnp5@gmail.com</a></p> 
                </div>
            </div>

        </div>
        <div class="col-lg-6">
                <p class="text-lg-end">© 2023 Website Bán Hàng Thực Phẩm. All rights reserved.</p>
        </div>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>