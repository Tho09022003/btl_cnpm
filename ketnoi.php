<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Tạo kết nối
$conn = mysqli_connect($localhost, $root, $, $btl_cnpm);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
echo "Kết nối thành công";
?>