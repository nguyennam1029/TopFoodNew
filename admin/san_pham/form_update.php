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
<?php 

$id =$_GET['id'];

        require '../menu.php' ;
        require '../connect.php';
        $sql = "select * from products where id = $id";
        $result = mysqli_query($connect,$sql);
        $each = mysqli_fetch_array($result);



    $sql1 = "select * from manufacturers ";
    $manufacturers = mysqli_query($connect,$sql1);

?>
<form action="process_update.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
tên
<input type="text" name="name" value="<?php echo $each['name'] ?>">
<br>
đổi ảnh
<input type="file" name="photo_new"  >
<br>
ảnh cũ
<img src="photos/<?php echo $each['photo'] ?>" alt="" height='100'>

<input type="hidden" name="photo_old" value="<?php echo $each['photo'] ?>">
<br>
giá
<input type="number" name="price" value="<?php echo $each['price'] ?>">
<br>
mô tả
<textarea name="description" id="" cols="30" rows="10"><?php echo $each['description'] ?></textarea>
<br>
nhà sản xuất
<select name="manufacturer_id"> 
     <?php foreach($manufacturers as $manufacturer):?>
          <option value="<?php echo $manufacturer['id']?>"
          <?php if($each['manufacturer_id'] == $manufacturer['id']){ ?>
               selected 
          <?php } ?>


          >
               <?php echo $manufacturer['name']?>
          </option>
     <?php endforeach?>
</select>
<br>
<button >sửa</button>


</form>
</body>
</html>