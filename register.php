<?php
// Kiểm tra nếu người dùng đã gửi biểu mẫu đăng ký
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];

    // Kết nối với cơ sở dữ liệu
    $servername = "localhost";  // Thay đổi nếu cần
    $username = "root";         // Thay đổi nếu cần
    $password = "";             // Thay đổi nếu cần
    $dbname = "doanchuyennganh";   // Thay đổi thành tên cơ sở dữ liệu của bạn

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    // Kiểm tra xem tên đăng nhập đã tồn tại chưa
    $checkUsernameQuery = "SELECT * FROM users WHERE username = '$newUsername'";
    $result = $conn->query($checkUsernameQuery);

    if ($result->num_rows > 0) {
        $error = 'Tên đăng nhập đã tồn tại. Vui lòng chọn tên đăng nhập khác.';
    } else {
        // Thêm tài khoản mới vào cơ sở dữ liệu
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $insertUserQuery = "INSERT INTO users (username, password) VALUES ('$newUsername', '$hashedPassword')";
        
        if ($conn->query($insertUserQuery) === TRUE) {
            // Hiển thị thông báo đăng ký thành công
            $successMessage = 'Đăng ký thành công! Chuyển hướng đến trang đăng nhập...';
            
            // Chuyển hướng đến trang đăng nhập sau 3 giây
            header("refresh:3;url=login.php");
        } else {
            $error = 'Đã có lỗi xảy ra khi thêm tài khoản. Vui lòng thử lại.';
        }
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
    <title>Trang đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 ">
        <div class="col-sm-6 offset-sm-3 border rounded p-4">
            <h2 class=" mb-4">Đăng ký</h2>

            <?php if (isset($error)) { ?>
                <p class="text-danger"><?php echo $error; ?></p>
            <?php } ?>

            <?php if (isset($successMessage)) { ?>
                <p class="text-success"><?php echo $successMessage; ?></p>
            <?php } ?>

            <form method="POST" action="" class="px-4 py-3">
                <div class="mb-3">
                    <label for="newUsername" class="form-label">Tên đăng nhập mới:</label>
                    <input type="text" class="form-control" id="newUsername" name="newUsername" required>
                </div>
                <div class="mb-3">
                    <label for="newPassword" class="form-label">Mật khẩu mới:</label>
                    <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                </div>

                <!-- Thêm các trường khác nếu cần thiết -->

                <button type="submit" class="btn btn-primary">Đăng ký</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.php">Đăng nhập</a>  
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>