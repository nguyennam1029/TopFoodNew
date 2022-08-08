<?php
session_start();
$id = $_GET['id'];
unset($_SESSION['cart'][$id]);
unset($_SESSION['cart']);

header('location:../view_cart2.php');
