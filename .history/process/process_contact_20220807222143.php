<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

require '../admin/connect.php';

$sql = "insert into contact(name,email,phone,message)
value ('$name','$email','$phone','$message')";

mysqli_query($connect, $sql);


mysqli_close($connect);
header("location:../contact.php?noti='v'");
