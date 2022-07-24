<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
// $phone = $_POST['phone'];
// $address = $_POST['address'];

$connect = mysqli_connect('localhost', 'root', '', 'topfood');
mysqli_set_charset($connect, 'utf8');
$sql = "insert into user(name, email, password) 
values('$name','$email','$password')";
mysqli_query($connect, $sql);
