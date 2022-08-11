<?php

if (($_POST['namensx']) || empty($_POST['address'])) {
    header('location:form_insert.php?error=phải điền đầy đủ thông tin');
}
$namensx = $_POST['namensx'];
$address = $_POST['address'];

// $photo = $_POST['photo'];

require '../connect.php';

$sql = " insert into manufacturers(namensx,address)
 Values('$namensx','$address')";

mysqli_query($connect, $sql);

mysqli_close($connect);
header('location:index.php?success=thêm thành công');
