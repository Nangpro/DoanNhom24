<?php
$folderPath = 'images';

if (!is_dir($folderPath)) {
    if (mkdir($folderPath, 0777, true)) {
        echo 'Thư mục images đã được tạo thành công.';
    } else {
        echo 'Có lỗi xảy ra khi tạo thư mục images.';
    }
} else {
    echo 'Thư mục images đã tồn tại.';
}
?>