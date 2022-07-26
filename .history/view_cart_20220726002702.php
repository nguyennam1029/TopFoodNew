<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $cart = $_SESSION['cart'];
    $sum = 0;

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
</body>

</html>