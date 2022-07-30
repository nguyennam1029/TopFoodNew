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

     $id = $_GET['id'];


     require '../connect.php';
     $sql = "select * from products where id = $id";
     $result = mysqli_query($connect, $sql);
     $each = mysqli_fetch_array($result);
     $sql1 = "select * from manufacturers ";
     $manufacturers = mysqli_query($connect, $sql1);

     ?>
     <?php if (isset($_GET['err'])) { ?>
          <div class="noti">
               <div class="noti-content">
                    <i class='bx bxs-bell-ring'></i>
                    <span class="noti-title"><?php echo $_GET['err'] ?></span>
                    <i class='bx bxs-bell-ring' style="margin-left: 6px; margin-right: 0;"></i>

               </div>
          </div>
     <?php } ?>
     <div class="wrapper-insert--product" style="height: 100%; min-height: 100vh;">
          <div class="form-insert">
               <h3>Thêm sản phẩm</h3>
               <form class="form-insert--item" action="process_update.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $each['id'] ?>">

                    <div class="form-insert-input">
                         <span>Tên</span>
                         <input type="text" name="name" value="<?php echo $each['name'] ?>">
                    </div>
                    <div class="form-insert-input">
                         <span>Giá</span>
                         <input type="number" name="price" value="<?php echo $each['price'] ?>">
                    </div>
                    <div class="form-insert-input">
                         <span>Ảnh</span>
                         <input type="file" name="photo_new">
                    </div>
                    <div class="form-insert-input" style="border-radius: 12px;
                                                            width: fit-content;
                                                            overflow: hidden;
                                                            margin: 0px auto 16px;">

                         <img src="photos/<?php echo $each['photo'] ?>" alt="" height='100'>
                    </div>
                    <input type="hidden" name="photo_old" value="<?php echo $each['photo'] ?>" style="border-radius: 6px ; overflow: hidden;">

                    <div class="form-insert-input">
                         <span>Mô tả</span>
                         <textarea name="description"><?php echo $each['description'] ?></textarea>
                    </div>

                    <div class="form-insert-input">
                         <span class="form-insert-input--title">Nhà sản xuất</span>
                         <select name="manufacturer_id">
                              <?php foreach ($manufacturers as $manufacturer) : ?>
                                   <option value="<?php echo $manufacturer['id'] ?>" <?php if ($each['manufacturer_id'] == $manufacturer['id']) { ?> selected <?php } ?>>
                                        <?php echo $manufacturer['namensx'] ?>
                                   </option>
                              <?php endforeach ?>
                         </select>

                    </div>


                    <div class="form-insert-input--btn">
                         <button name="create" class="custom-btn btn-11 hover-active">Thêm</button>

                    </div>
               </form>

          </div>

     </div>
</body>

</html>