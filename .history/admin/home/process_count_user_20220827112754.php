<?php
require '../connect.php';
$sql = "SELECT status FROM oder WHERE status='1'";
$count = mysqli_query($connect, $sql);
header(`location:index.php?count=$count`);
