<?php

session_start();
unset($_SESSION['id']);
unset($_SESSION['name']);
setcookie('remember', NULL, -1);
header('location:index.php');
