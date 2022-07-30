<?php
 require '../ckeck_super_admin_login.php' ;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include '../menu.php';
?>

    <form action="process_insert.php" method="post">
        tên 
        <input type="text" name="name">
        <br>
        địa chỉ
        <textarea name="address" id="" cols="30" rows="10"></textarea>
        <br>
        điện thoại 
        <input type="text" name="phone">
        <br>
        ảnh
        <input type="text" name="photo">
        <button>thêm</button>
    </form>
</body>
</html>