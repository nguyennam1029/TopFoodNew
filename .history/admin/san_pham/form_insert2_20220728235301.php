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
     <div class="form-inser--product">

          <div class="center">
               <h1>Thêm sản phẩm</h1>
               <form>
                    <div class="inputbox">
                         <input type="text" required="required">
                         <span>Tên</span>
                    </div>
                    <div class="inputbox">
                         <input type="text" required="required">
                         <span>Giá</span>
                    </div>
                    <div class="inputbox">
                         <input type="file" name="photo" required="required">

                    </div>
                    <div class="inputbox">
                         <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="inputbox">
                         <input type="button" value="submit">
                    </div>
               </form>
          </div>
     </div>


</body>

</html>