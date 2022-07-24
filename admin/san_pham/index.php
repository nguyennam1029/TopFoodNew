<?php
 require '../check_admin_login.php' ;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  require '../menu.php' ;
        require '../connect.php';
    $sql = "select * from products ";
    $result = mysqli_query($connect,$sql);

?>

    <h1>quản lý sản phẩm</h1>
    <a href="form_insert.php">thêm</a>
    <table border=1 width=100%> 
    <tr>
    <th>mã</th>
    <th>tên </th>
    <th>ảnh </th>
    <th>giá </th>
    <th>sửa</th>
    <th>xóa</th>
    </tr>
    
    <?php foreach($result as $each): ?>
    <tr>
        <td><?php echo $each['id']?></td>
        <td><?php echo $each['name']?></td>
        <td><img  height="100" src="photos/<?php echo $each["photo"]?>" alt=""></td>
        <td><?php echo $each['price']?></td>


        <td><a href="form_update.php?id=<?php echo $each['id'] ?>">sửa</a></td>
        <td><a href="delete.php?id=<?php echo $each['id'] ?>">xóa</a></td>
    </tr>
    <?php endforeach?>
    
    
    
    
    </table>




</body>
</html>