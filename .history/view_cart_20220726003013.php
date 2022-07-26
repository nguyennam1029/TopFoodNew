<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="https://hhhkungfu.tv/wp-content/uploads/2021/12/1-copy.png" type="image/x-icon" />

    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Rubik+Wet+Paint&display=swap" rel="stylesheet" />
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!-- ---aos-- -->
    <!-- <link rel="stylesheet" href="aos-2/dist/aos.css"> -->
    <!-- APP CSS -->
    <!-- <link rel="stylesheet" href="form/form_style.css"> -->
    <link rel="stylesheet" href="grid.css" />
    <link rel="stylesheet" href="app.css" />
</head>

<body>
    <?php
    session_start();
    $cart = $_SESSION['cart'];
    $sum = 0;

    ?>
    <div class="app">
        <?php include 'menu.php'
        ?>
        <table border="1" width="100%">
            <tr>
                <th>ảnh</th>
                <th>tên sản phẩm</th>
                <th>giá</th>
                <th>số lượng </th>
                <th>tổng tiền</th>
                <th>xóa</th>

            </tr>

            <tr>
                <?php foreach ($cart as $id => $each) :  ?>

            <tr>
                <td><img height='100' src="admin/san_pham/photos/<?php echo $each['photo'] ?>"> </td>
                <td><?php echo $each['name'] ?></td>
                <td><?php echo $each['price'] ?></td>
                <td>
                    <a href="update_cart.php?id=<?php echo $id ?>&type=decre">-</a>
                    <?php echo $each['quantity'] ?>
                    <a href="update_cart.php?id=<?php echo $id ?>&type=incre">+</a>
                </td>

                <td>
                    <?php
                    $result = $each['price'] * $each['quantity'];
                    echo $result;
                    $sum += $result;
                    ?>
                </td>
                <td> <a href="delete_cart_item.php?id=<?php echo $id ?>">x</a></td>


            </tr>

            </tr>
        <?php endforeach ?>


        </table>
        <h1>
            tổng tiền hóa đơn
            <?php echo $sum ?></h1>

        <?php $id = $_SESSION['id'];
        require 'admin/connect.php';
        $sql = "select * from customers where id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);


        ?>
        <form action="process_checkout.php" method="post">
            tên người nhận
            <input type="text" name="name_receiver" value="<?php echo $each['name'] ?>">
            <br>
            số điện thoại người nhận
            <input type="text" name="phone_receiver" value="<?php echo $each['phone_number'] ?>">
            <br>
            địa chỉ người nhận
            <input type="text" name="address_receiver" value="<?php echo $each['address'] ?>">
            <br>
            <button>đặt hàng</button>
        </form>

        <!-- FOOTER SECTION -->
        <?php include 'footer.php' ?>
        <!-- END FOOTER SECTION -->
    </div>
</body>

</html>