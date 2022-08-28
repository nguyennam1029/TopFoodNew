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
     <?php if (isset($_GET['error'])) { ?>
          <div class="noti">
               <div class="noti-content">
                    <i class='bx bxs-bell-ring'></i>
                    <span class="noti-title"><?php echo $_GET['error'] ?></span>
                    <i class='bx bxs-bell-ring' style="margin-left: 6px; margin-right: 0;"></i>

               </div>
          </div>
     <?php } ?>
     <div class="wrapper-insert--product">
          <div class="form-insert">
               <h3>Thêm sản phẩm</h3>
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
                         <span>Mô tả</span>
                         <textarea name="description"></textarea>
                    </div>

                    <div class="form-insert-input">
                         <span class="form-insert-input--title">Nhà sản xuất</span>
                         <select name="manufacturer_id">
                              <?php foreach ($result as $each) : ?>
                                   <option value="<?php echo $each['id'] ?>">
                                        <?php echo $each['namensx'] ?>
                                   </option>
                              <?php endforeach ?>
                         </select>

                    </div>


                    <div class="form-insert-input--btn">
                         <button name="create" class="custom-btn btn-11 hover-active">Thêm</button>
                         <a href="./index.php" class="back-home custom-btn btn-11">Quay lại</a>
                    </div>
               </form>

          </div>

     </div>
</body>

</html>