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
    $sql = "select * from manufacturers ";
    $result = mysqli_query($connect,$sql);

?>
<form action="process_insert.php" method="post" enctype="multipart/form-data">
tên
<input type="text" name="name">
<br>
ảnh
<input type="file" name="photo">
<br>
giá
<input type="number" name="price">
<br>
mô tả
<textarea name="description" id="" cols="30" rows="10"></textarea>
<br>
nhà sản xuất
<select name="manufacturer_id">
     <?php foreach($result as $each):?>
          <option value="<?php echo $each['id']?>">
               <?php echo $each['name']?>
          </option>
     <?php endforeach?>
</select>
<br>
<button name="create">thêm</button>


</form>
</body>
</html>