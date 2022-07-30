<?php
if (empty($_POST['name']) || empty($_POST['photo']) || empty($_POST['price'])) {
    header('location: form_insert.php?error=Bạn vui lòng: xem lại thông tin');
}
$name = $_POST['name'];
$photo = $_FILES['photo'];
$price = $_POST['price'];
$description = $_POST['description'];
$manufacturer_id = $_POST['manufacturer_id'];

$folder = 'photos/';
// explode-> nối đuôi của anh vd .png 
$file_extension = explode('.', $photo['name'])[1];
// time render thời gian hiện tại để k bị lặp và gán vs đuôi
$file_name = time() . '.' . $file_extension;
// đường dẫn tới ảnh
$path_file = $folder . $file_name;
// Di chuyển file ảnh vao folder photos
move_uploaded_file($photo["tmp_name"], $path_file);

require '../connect.php';

$sql = " insert into products(name,photo,price,description,manufacturer_id)
 Values('$name','$file_name','$price','$description','$manufacturer_id')";

mysqli_query($connect, $sql);
$err = mysqli_error($connect);
mysqli_close($connect);
if (empty($err)) {

    header('location: index.php?success=Đã thêm thành công');
}
