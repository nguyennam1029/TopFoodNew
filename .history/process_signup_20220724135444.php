<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
// $phone = $_POST['phone'];
// $address = $_POST['address'];

$ket_noi = mysqli_connect('localhost', 'root', '', 'topfood');
mysqli_set_charset($ket_noi, 'utf8');
$sql = "insert into user(name, email, password) 
values('$name','$email','$password')";
mysqli_query($ket_noi, $sql);
