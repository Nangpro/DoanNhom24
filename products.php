<!DOCTYPE html>
<html>
<head>
    <title>Sản phẩm</title>
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
            display: flex;
            justify-content: center;
        }

        /* CSS cho sản phẩm */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        .product {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .product img {
            width: 100%;
            height: auto;
        }

        .product h4 {
            color: red;
            margin-top: 10px;
        }

        .product p {
            color: #555;
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

    </style>
</head>
<body>
    <?php
    // Kết nối CSDL
    $conn = mysqli_connect('localhost', 'root', '', 'doanchuyennganh');

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối CSDL thất bại: " . mysqli_connect_error());
    }

    // Truy vấn dữ liệu sản phẩm
    $query = "SELECT * FROM SanPham";
    $result = mysqli_query($conn, $query);
    ?>

    <header>
        <h1 style="color: red;">Sản phẩm</h1>

    </header>
    
    <div class="content-container">
        <h5>Chào mừng đến với trang web bán hàng thực phẩm</h5>
        <div class="product-grid">
            <?php
            // Hiển thị dữ liệu sản phẩm
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  
                    echo "<div class='product'>";
                    echo "<a href='product_detail.php?id=" . $row['id'] . "'>";
                    echo "<img src='" . $row['hinh_anh'] . "' alt='" . $row['ten'] . "'>";
                    echo "<h4>" . $row['ten'] . "</h4>";
                    echo "<p>Giá: " . $row['gia'] . "</p>";
                    echo "</a>";
                    echo "</div>";

                    echo "<form method='post' action='cart.php'>";
                    echo "<input type='hidden' name='product_id' value='" . $row['id'] . "'>";
                    echo "<input type='hidden' name='product_price' value='" . $row['gia'] . "'>";
                    echo "<input type='submit' value='Mua hàng' name='addtocart'>";
                    echo "</form>";
                    
                }
            } else {
                echo "Không có sản phẩm.";
            }

            // Đóng kết nối
            mysqli_close($conn);
            ?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>