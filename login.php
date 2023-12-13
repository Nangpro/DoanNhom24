<?php
// Kiểm tra nếu người dùng đã gửi biểu mẫu đăng nhập
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kết nối với cơ sở dữ liệu
    $servername = "localhost";  // Thay đổi nếu cần
    $dbUsername = "root";       // Thay đổi nếu cần
    $dbPassword = "";           // Thay đổi nếu cần
    $dbname = "doanchuyennganh";   // Thay đổi thành tên cơ sở dữ liệu của bạn

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    // Kiểm tra tài khoản và mật khẩu từ cơ sở dữ liệu
    $checkUserQuery = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($checkUserQuery);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Đăng nhập thành công, chuyển hướng đến trang chính
            header('Location: index.php');
            exit;
        } else {
            $error = 'Sai mật khẩu. Vui lòng thử lại.';
        }
    } else {
        $error = 'Tài khoản không tồn tại. Vui lòng đăng ký trước.';
    }

    // Đóng kết nối
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 ">
        <div class="col-sm-6 offset-sm-3 border rounded p-4">
            <h2 class=" mb-4">Đăng nhập</h2>

            <?php if (isset($error)) { ?>
                <p class="text-danger"><?php echo $error; ?></p>
            <?php } ?>

            <form method="POST" action="" class="px-4 py-3">
                <div class="mb-3">
                    <label for="username" class="form-label">Tên đăng nhập:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <!-- Thêm các trường khác nếu cần thiết -->

                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                              
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="register.php">Đăng Ký</a> 
        
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>