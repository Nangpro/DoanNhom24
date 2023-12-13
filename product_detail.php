<!DOCTYPE html>
<html>
<head>
    <title>Sản phẩm chi tiết</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
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

        footer {
            background-color: #e1e6d3;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
<header>
        <h1 style="color: red;">Chi Tiết Sản Phẩm</h1>
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
</nav>
    <main>
    <section id="product-detail">
            <?php
            // Kiểm tra xem có tham số id trong URL không
            if (isset($_GET['id'])) {
                // Lấy giá trị id từ URL
                $id = $_GET['id'];

                // Kết nối đến CSDL
                $conn = mysqli_connect('localhost', 'root', '', 'doanchuyennganh');

                // Kiểm tra kết nối
                if (!$conn) {
                    die("Kết nối đến CSDL thất bại: " . mysqli_connect_error());
                }

                // Truy vấn CSDL để lấy thông tin chi tiết sản phẩm
                $query = "SELECT * FROM SanPham WHERE id = $id";
                $result = mysqli_query($conn, $query);

                // Kiểm tra và hiển thị thông tin chi tiết sản phẩm
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo "<div class='product-detail'>";
                    echo "<img src='" . $row['hinh_anh'] . "' alt='" . $row['ten'] . "' class='product-image'>";
                    echo "<h2>" . $row['ten'] . "</h2>";
                    echo "<p>Giá: " . $row['gia'] . "</p>";
                    echo "<p>" . $row['mo_ta'] . "</p>";
                    echo "</div>";
                } else {
                    echo "Không tìm thấy sản phẩm.";
                }

                // Đóng kết nối
                mysqli_close($conn);
            } else {
                echo "Không tìm thấy sản phẩm.";
            }
            ?>
        </section>
        <footer>
        <div class="contact-info">
            <h4>Thông tin liên hệ</h4>
            <p>Địa chỉ: 182 Lê Duẩn - Thành phố Vinh - tỉnh Nghệ An</p>
            <p>Điện thoại: 0123456789</p>
            <p>Email: pvp123@gmail.com</p>
        </div>
    </footer>
        <footer>
        <p>© 2023 Website Giới thiệu Bán Hàng Thực Phẩm. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>