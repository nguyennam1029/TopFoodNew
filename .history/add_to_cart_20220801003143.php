<?php
session_start();
$id = $_GET['id'];
$quantity = $_GET['quantity'];
if (isset($_SESSION['name'])) {
    header("location:product_detail.php?id=$id&false='Vui lòng xem lại'");
}
if (empty($_SESSION['cart']['id'])) {
    require 'admin/connect.php';
    $sql = " select * from products where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    $_SESSION['cart'][$id]['name'] = $each['name'];
    $_SESSION['cart'][$id]['photo'] = $each['photo'];
    $_SESSION['cart'][$id]['price'] = $each['price'];
    $_SESSION['cart'][$id]['quantity'] = $quantity;
} else {
    $_SESSION['cart'][$id]['quantity']++;
}

header("location:product_detail.php?id=$id&quantity=$quantity&success='Thêm thành công'");
