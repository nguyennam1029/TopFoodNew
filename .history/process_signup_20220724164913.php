<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
require 'admin/connect.php';
$sql = "select count(*) from user where email = '$email'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if ($number_rows == 1) {
    header('location:signup.php?error=Vui lòng chọn email khác');
    exit;
}
$sql = "insert into user(name,email,password,phone)
value ('$name','$email','$password','$phone')";
mysqli_query($connect, $sql);

// lấy email qua id 
$sql = "select id from user where email = '$email'";
$result = mysqli_query($connect, $sql);
$id = mysqli_fetch_array($result)['id'];
session_start();
// lưu id vào session phiên đăng nhập
$_SESSION['id'] = $id;
$_SESSION['name'] = $name;
mysqli_close($connect);
header('location:sign_in.php');
