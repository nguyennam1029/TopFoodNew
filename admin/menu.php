<ul>
        <li><a href="../nha_san_xuat">quản lý nhà sản xuất</a></li>
        
    </ul>
    <ul>
        <li><a href="../san_pham">quản lý sản phẩm </a></li>
        
    </ul>
    <ul>
        <li><a href="../orders">quản lý đơn hàng </a></li>
        
    </ul>
    <?php

if(isset($_GET['error'])){
?>


     <span style='color:red'>
         <?php echo $_GET['error'] ?>
     </span>
 <?php }    ?>
 <?php
 if(isset($_GET['success'])){
?>


     <span style='color:green'>
         <?php echo $_GET['success'] ?>
     </span>
 <?php }    ?>