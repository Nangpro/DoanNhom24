<p>
<?php
    

    // Kiểm tra xem có giỏ hàng không
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Xử lý thêm sản phẩm vào giỏ hàng
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
        $productId = $_POST['product_id'];

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        if (isset($_SESSION['cart'][$productId])) {
            // Nếu có, tăng số lượng lên 1
            $_SESSION['cart'][$productId]++;
        } else {
            // Nếu chưa, thêm sản phẩm mới vào giỏ hàng với số lượng là 1
            $_SESSION['cart'][$productId] = 1;
        }
    }

    // Hiển thị giỏ hàng
    echo '<h2>Giỏ Hàng Của Bạn</h2>';
    echo '<ul>';
    $totalPrice = 0;

    foreach ($_SESSION['cart'] as $productId => $quantity) {
        
        $productPrice = 50000.00;
        $subtotal = $productPrice * $quantity;
        $totalPrice += $subtotal;

        echo '<li>';
        echo 'ID: ' . $productId . ' | Số lượng: ' . $quantity . ' | Tổng tiền: ' . number_format($subtotal, 2) . 'đ';
        echo '</li>';
    }

    echo '</ul>';
    echo '<p>Giá: ' . number_format($totalPrice, 2) . 'đ</p>';
    ?>
    </p>