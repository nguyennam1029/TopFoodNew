<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="./sty.css">

</head>

<body>

    <div class="container">
        <?php
        include '../menu2.php';
        ?>
        <div class="main">
            <?php
            include '../top_menu.php';
            ?>

            <!-- ================ Order Details List ================= -->
            <div class="details">

                <div class="recentOrders ">
                    <div class="cardHeader ">
                        <h2>Sản phẩm đã đăng</h2>
                        <a href="./form_insert2.php" class="btn status inProgress">Thêm sản phẩm</a>
                    </div>
                    <?php
                    require '../connect.php';


                    // //TÌM KIẾM
                    // $search = $_GET['q'] ?? '';

                    // $sql = "select products.*,
                    //         manufacturers.name as manufacturer_name from products
                    //         join manufacturers on products.manufacturer_id = manufacturers.id where products.name like '%$search%' ";


                    //         $result = mysqli_query($connect, $sql);
                    if (isset($_GET['trang'])) {
                        $trang = $_GET['trang'];
                    } else {
                        $trang = 1;
                    }

                    $tim_kiem = '';
                    if (isset($_GET['tim_kiem'])) {
                        $tim_kiem = $_GET['tim_kiem'];
                    }
                    $sql_so_tin_tuc = "select count(*) from products 
                    
                                        where 
                                        name like '%$tim_kiem%'";
                    $mang_so_tin_tuc = mysqli_query($connect, $sql_so_tin_tuc);
                    $ket_qua_so_tin_tuc = mysqli_fetch_array($mang_so_tin_tuc);
                    $so_tin_tuc = $ket_qua_so_tin_tuc['count(*)'];
                    $so_tin_tuc_tren_1_trang = 3;
                    $so_trang = ceil($so_tin_tuc / $so_tin_tuc_tren_1_trang);
                    $bo_qua = $so_tin_tuc_tren_1_trang * ($trang - 1);


                    $sql = "select products.*,
                          manufacturers.name as manufacturer_name from products
                           join manufacturers on products.manufacturer_id = manufacturers.id 
                           where products.name like '%$tim_kiem%'
                            limit $so_tin_tuc_tren_1_trang offset $bo_qua";
                    $result = mysqli_query($connect, $sql);

                    ?>
                    <div class="sticky-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Loại</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($result as $each) : ?>
                                    <tr>
                                        <td><?php echo $each['id'] ?></td>
                                        <td><?php echo $each['name'] ?></td>

                                        <td>
                                            <div class="user">
                                                <img src="./photos/<?php echo $each["photo"] ?>" alt="" />

                                            </div>
                                        </td>
                                        <td><?php echo $each['price'] ?></td>
                                        <td><?php echo $each['manufacturer_name'] ?></td>
                                        <td>
                                            <a href="form_update.php?id=<?php echo $each['id'] ?>">
                                                <ion-icon name="create-outline" class="product-item--icon status delivered"></ion-icon>
                                            </a>
                                        </td>
                                        <td><span class="">
                                                <a href="delete.php?id=<?php echo $each['id'] ?>">
                                                    <ion-icon name="trash-outline" class="status return"></ion-icon>
                                                </a>
                                            </span></td>

                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>

                    </div>
                </div>

                <!-- ================= New Customers ================ -->

            </div>
            <div class="panigation">
                <ul class="page-list">
                    <?php for ($i = 1; $i <= $so_trang; $i++) { ?>
                        <a class="page-item" href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>">
                            <?php
                            echo $i ?>
                        </a>
                    <?php } ?>

                    <i class="page-item fa-solid fa-angle-right"></i>
                </ul>
            </div>
            <?php for ($i = 1; $i <= $so_trang; $i++) { ?>
                <a href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>">
                    <?php
                    echo $i ?>
                </a>
            <?php } ?>
        </div>
    </div>


    <!-- =========== Scripts =========  -->
    <script src="../assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>