<?php

$id = $_POST['id'];

if (empty($_POST['name'])  || empty($_POST['price'])) {
    header("location: form_update2.php?id=$id&err=Bạn vui lòng: xem lại thông tin");
    exit;
}

$name = $_POST['name'];
$photo_new = $_FILES['photo_new'];
// -> nếu mà thay ảnh mới thì kiểm tra size của nó có > 0 nêú lớn thì gán lại ảnh
if ($photo_new['size'] > 0) {
    $folder = 'photos/';
    $file_extension = explode('.', $photo_new['name'])[1];
    $file_name = time() . '.' . $file_extension;
    $path_file = $folder . $file_name;

    move_uploaded_file($photo_new["tmp_name"], $path_file);
} else {
    // còn k vẫn giữ nguyên
    $file_name = $_POST['photo_old'];
}
$price = $_POST['price'];
$description = $_POST['description'];
$manufacturer_id = $_POST['manufacturer_id'];
require '../connect.php';
$sql = "update products 
set
name = '$name',
photo = '$file_name',
price = '$price',
description = '$description',
manufacturer_id = '$manufacturer_id'
where
id ='$id'
";
mysqli_query($connect, $sql);
$err = mysqli_error($connect);
mysqli_close($connect);
if (empty($err)) {

    header('location: index.php?update=Sửa thành công');
}
