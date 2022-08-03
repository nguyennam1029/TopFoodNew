<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../app.css" />
    <link rel="stylesheet" href="../san_pham/css/style.css" />

</head>

<body>

    <div class="wrapper-insert--product" style="height: 100%; min-height: 100vh;">
        <div class="form-insert">
            <h3>Thêm danh mục</h3>
            <form class="form-insert--item" action="process_insert.php" method="post" enctype="multipart/form-data">

                <div class="form-insert-input">
                    <span>Tên</span>
                    <input type="text" name="namensx" />
                </div>
                <div class=" form-insert-input">
                    <span>Điện thoại</span>
                    <input type="number" name="phone">
                </div>

                <div class="form-insert-input">
                    <span>Địa chỉ</span>
                    <textarea name="address"></textarea>
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