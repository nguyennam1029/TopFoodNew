<?php
require '../check_admin_login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="../../app.css" />
     <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
     <?php
     require '../connect.php';
     $sql = "select * from manufacturers ";
     $result = mysqli_query($connect, $sql);

     ?>
     <div class="wrapper-insert--product">
          <div class="form-insert">
               <form class="form-insert--item" action="process_insert.php" method="post" enctype="multipart/form-data">
                    <div class="form-insert-input">
                         <span>Tên</span>
                         <input type="text" name="name">
                    </div>
                    <div class="form-insert-input">
                         <span>Giá</span>
                         <input type="number" name="price">
                    </div>
                    <div class="form-insert-input">
                         <span>Ảnh</span>
                         <input type="file" name="photo">
                    </div>



                    <div class="form-insert-input">
                         <span>Nhà sản xuất</span>
                         <select name="manufacturer_id">
                              <?php foreach ($result as $each) : ?>
                                   <option value="<?php echo $each['id'] ?>">
                                        <?php echo $each['name'] ?>
                                   </option>
                              <?php endforeach ?>
                         </select>

                    </div>
                    <div class="form-insert-input">
                         <span>Mô tả</span>
                         <textarea name="description"></textarea>
                    </div>


                    <br>
                    <button name="create">thêm</button>


               </form>

          </div>

     </div>
</body>

</html>