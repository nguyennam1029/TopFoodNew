<?php
$id = $_GET['id'];
require '../connect.php';
$sql ="delete from manufacturers where id = '$id' ";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location: index.php?delete=Xóa thành công');
