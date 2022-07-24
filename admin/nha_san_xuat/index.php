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
    đây là khu vực quản lý nhà sản xuất 
    <a href="form_insert.php"> thêm</a>
    <?php 
   include '../menu.php';

   ?>
   <?php
   require('../connect.php');
   $sql = "select * from manufacturers";
   $result = mysqli_query($connect,$sql);
   ?>
 <table border="1"width="100%">
     <tr>
        <th>mã</th>
          <th>tên</th>
          <th>Dia chi</th>
          <th> Điện thoại</th>
          <th>Ảnh</th>
          <th>sửa</th>
          <th>xóa</th>
     </tr>
<?php foreach($result as $each): ?>
     <tr>
          <td><?php echo $each['id']?></td>
          <td><?php echo $each['name']?></td>
          <td><?php echo $each['address']?></td>
          <td><?php echo $each['phone']?></td>
          <td>
               <img height="100"src="<?php echo $each["photo"]
               ?>">
          </td>
          <td><a href="form_update.php?id=<?php echo $each['id']?>">sửa</a></td>
          <td><a href="delete.php?id=<?php echo $each['id']?> ">xóa</a></td>
     </tr>
<?php endforeach?>
</body>
</html>