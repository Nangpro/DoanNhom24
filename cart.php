<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Link đến file CSS của bạn -->
    <link rel="stylesheet" href="style.css">
    <style>
        /* Định dạng cơ bản cho trang giỏ hàng */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #007bff;
        color: #fff;
        text-align: center;
        padding: 10px;
    }

    main {
        display: flex;
        justify-content: space-around;
        padding: 20px;
    }

    .products, .cart {
        width: 45%;
        border: 1px solid #ddd;
        padding: 20px;
        box-sizing: border-box;
    }

    .product, li {
        list-style: none;
        margin-bottom: 10px;
    }

    footer {
        text-align: center;
        background-color:
    }
    </style>
</head>
<body>
    <header>
        <h1>Giỏ Hàng</h1>
    </header>

    <main>
        <section class="products">
            <!-- Hiển thị danh sách sản phẩm -->
            <?php include 'products.php'; ?>
        </section>

        <section class="cart">
            <!-- Hiển thị giỏ hàng -->
             <?php include 'shopping_cart.php'; ?> 
             <button onclick="purchase()">Thanh Toán</button>
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
