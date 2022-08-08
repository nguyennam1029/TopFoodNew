<?php
$email = $_POST['email'];
$password = $_POST['password'];

require 'admin/connect.php';
//LẤY TOÀN BỘ THÔNG TIN CỦA KHÁCH HÀNG THEO EMAI VÀ MK KHI ĐÃ ĐĂNG NHẬP VÀO
$sql = "select * from user where email = '$email' and password = '$password'";
$result = mysqli_query($connect, $sql);
//ĐẾM XEM CÓ BAO NHIÊU BẢN GHI
$number_rows = mysqli_num_rows($result);

if ($number_rows == 1) {
    session_start();
    $each = mysqli_fetch_array($result);
    $_SESSION['id'] = $each['id'];
    $_SESSION['name'] = $each['name'];

    header('location: index.php');
    exit;
    if ($remember) {
        setcookie('remember', $each['id'], time() + 60 * 60 * 24 * 30);
    }
}
header('location:sign_in.php?error=Vui lòng xem lại Email hoặc Mật khẩu');
