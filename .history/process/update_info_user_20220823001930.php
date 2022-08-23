<?php

$id = $_POST['id'];

if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['address'])) {
    header("location:form_update.php?id=$id&error=phải điền đầy đủ thông tin");
    exit;
}

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
require '../connect.php';

$sql = "update user 
set
name = '$name',
address = '$address',
email = '$email',
phone = '$phone'
where 
id = '$id'
";

mysqli_query($connect, $sql);
$error = mysqli_error($connect);
mysqli_close($connect);
if (empty($error)) {
    header('location:../index.php?success=sửa thành công');
} else {
    header("location:../info_user.php?id=$id&error=lỗi truy vấn");
}
