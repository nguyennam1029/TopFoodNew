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
$sql = "insert into user(name,email,password,phone_number,address)
value ('$name','$email','$password','$phone_number','$address')";
mysqli_query($connect, $sql);
session_start();
$_SESSION['name'] = $name;
mysqli_close($connect);
