<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../plugin/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="stylesheet" href="../../app.css" />
    <link rel="stylesheet" href="../san_pham/css/style.css" />

</head>

<body>
    <?php

    if (empty($_GET['id'])) {
        header('location:index.php?eror=phải truyền mã để sửa');
    }
    $id = $_GET['id'];


    require '../connect.php';
    $sql = "select * from manufacturers where id='$id'";


    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);

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
            <h3>Sửa danh mục</h3>
            <form class="form-insert--item" action="process_update.php?id=<?php echo $each['id'] ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $each['id'] ?>">

                <div class="form-insert-input">
                    <span>Tên</span>
                    <input type="text" name="namensx" value="<?php echo $each['namensx'] ?>"">
                </div>
                <div class=" form-insert-input">
                    <span>Điện thoại</span>
                    <input type="number" name="phone" value="<?php echo $each['phone'] ?>">
                </div>

                <div class="form-insert-input">
                    <span>Địa chỉ</span>
                    <textarea name="address"><?php echo $each['address'] ?></textarea>
                </div>



                <div class="form-insert-input--btn">
                    <button name="create" class="custom-btn btn-11 hover-active">Sửa</button>

                    <a href="./index.php" class="back-home custom-btn btn-11">Quay lại</a>
                </div>
            </form>

        </div>

    </div>
</body>

</html>