<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../noti.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <!-- <link rel="stylesheet" href="./sty.css"> -->
    <style>
        .active-bg--order {
            background-color: var(--white) !important;
            pointer-events: none;

        }

        .active-text--order {
            color: var(--blue) !important;

        }

        .active-text--order::before {
            content: "";
            position: absolute;
            right: 0;
            top: -50px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px 35px 0 10px var(--white);
            pointer-events: none;
        }

        .active-text--order::after {
            content: "";
            position: absolute;
            right: 0;
            bottom: -50px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px -35px 0 10px var(--white);
            pointer-events: none;
        }

        .btn {
            font-size: 16px;
            font-weight: 500;
        }

        .status-box ion-icon {
            margin-right: 6px;
        }

        .custerm-btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 16px !important;
            font-weight: 400;

        }



        #style-7::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        #style-7::-webkit-scrollbar {
            width: 4px;
            height: 8px;
            background-color: #F5F5F5;
        }

        #style-7::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-image: -webkit-gradient(linear,
                    left bottom,
                    left top,
                    color-stop(0.44, rgb(122, 153, 217)),
                    color-stop(0.72, rgb(73, 125, 189)),
                    color-stop(0.86, rgb(28, 58, 148)));
        }

        #style-7::-webkit-scrollbar-thumb:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php if (isset($_GET['success'])) { ?>
        <div class="noti">
            <div class="noti-content">
                <ion-icon name="checkmark-circle" style="color: green;margin-right: 8px;"></ion-icon>
                <span class="noti-title">Cập nhật trạng thái thành công</span>
                <i class='bx bxs-bell-ring' style="margin-left: 6px; margin-right: 0;"></i>

            </div>
        </div>
    <?php } ?>
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

                <div class="recentOrders " style="overflow-x: scroll;">
                    <div class="cardHeader ">
                        <h2>Chi tiết đơn hàng</h2>

                    </div>
                    <?php


                    $oder_id = $_GET['id'];
                    require '../connect.php';

                    $sql = "select
    *
    from oder_product
    join products on products.id = oder_product.product_id 
    where oder_id = '$oder_id'";
                    $result = mysqli_query($connect, $sql);
                    $sum = 0;

                    ?>
                    <div class="sticky-table" id="style-7">
                        <table id="table2excel">
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Tổng tiền</th>


                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($result as $each) : ?>
                                    <tr>
                                        <td><img height='100' src="../san_pham/photos/<?php echo $each['photo'] ?>"></td>
                                        <td><?php echo $each['name'] ?></td>
                                        <td><?php echo $each['price'] ?></td>
                                        <td><?php echo $each['quantity'] ?></td>

                                        <td>
                                            <?php
                                            $result = $each['price'] * $each['quantity'];
                                            echo $result;
                                            $sum += $result;
                                            ?>
                                        </td>

                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>

                    </div>

                </div>

                <!-- ================= New Customers ================ -->

            </div>


        </div>
    </div>


    <!-- =========== Scripts =========  -->
    <script src="../assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>