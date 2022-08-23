<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $oder_id = $_GET['id'];
    require './admin/connect.php';

    $sql = "select
    *
    from oder_product
    join products on products.id = oder_product.product_id 
    where oder_id = '$oder_id'";
    $result = mysqli_query($connect, $sql);
    $sum = 0;
    ?>
    <table border="1" width="100%">
        <tr>

            <th>ảnh</th>
            <th>tên sản phẩm</th>
            <th>giá</th>
            <th>số lượng </th>
            <th>tổng tiền</th>


        </tr>
        <tr>
            <?php foreach ($result as  $each) :  ?>

        <tr>
            <td><img height='100' src="../san_pham/photos/<?php echo $each['photo'] ?>"> </td>
            <td><?php echo $each['name'] ?></td>
            <td><?php echo $each['price'] ?></td>
            <td><?php echo $each['quantity'] ?></td>


            <td>
                <?php
                $result = $each['price'] * $each['quantity'];
                echo $result;
                $sum += $result;
                ?>
            </td>

        </tr>
    <?php endforeach ?>

    </table>
    <h1>tổng tiền đơn này là <?php echo $sum ?></h1>
</body>

</html>