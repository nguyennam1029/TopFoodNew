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

    if(empty($_GET['id'])){
        header('location:index.php?eror=phải truyền mã để sửa');
    }
    $id =$_GET['id'];

    include '../menu.php';
    require '../connect.php';
    $sql = "select * from manufacturers where id='$id'";
   
    
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    
?>
<form action="process_update.php?id=<?php echo $each['id'] ?>" method="post">
<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
tên 
        <input type="text" name="name" value="<?php echo $each['name'] ?>">
        <br>
        địa chỉ
        <textarea name="address" id="" cols="30" rows="10"><?php echo $each['address'] ?></textarea>
        <br>
        điện thoại 
        <input type="text" name="phone" value="<?php echo $each['phone'] ?>">
        <br>
        ảnh
        <input type="text" name="photo" value="<?php echo $each['photo'] ?>">
        <button>sửa</button>
    </form>
</body>
</html>