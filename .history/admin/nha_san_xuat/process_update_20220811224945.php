<?php

if (empty($_POST['id'])) {
    header('location:index.php?error=phải truyền mã để sửa');
    exit;
}

$id = $_POST['id'];

if (empty($_POST['namensx']) || empty($_POST['address'])) {
    header("location:form_update.php?id=$id&error=phải điền đầy đủ thông tin");
    exit;
}

$namensx = $_POST['namensx'];
$address = $_POST['address'];

require '../connect.php';

$sql = "update manufacturers 
set
namensx = '$namensx',
address = '$address'
where 
id = '$id'
";

mysqli_query($connect, $sql);
$error = mysqli_error($connect);
mysqli_close($connect);
if (empty($error)) {
    header('location:index.php?success=sửa thành công');
} else {
    header("location:form_update.php?id=$id&error=lỗi truy vấn");
}
