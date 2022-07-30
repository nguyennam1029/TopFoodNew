<?php

if (($_POST['name']) || empty($_POST['address']) || empty($_POST['
phone'])) {
    header('location:form_insert.php?error=phải điền đầy đủ thông tin');
}
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
// $photo = $_POST['photo'];

require '../connect.php';

$sql = " insert into manufacturers(name,address,phone)
 Values('$name','$address','$phone')";

mysqli_query($connect, $sql);

mysqli_close($connect);
header('location:index.php?success=thêm thành công');
