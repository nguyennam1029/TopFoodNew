<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../noti.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="./sty.css">
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
    </style>
</head>

<body>

    <div class="container">
        <?php if (isset($_GET['success'])) { ?>
            <div class="noti">
                <div class="noti-content">
                    <i class='bx bxs-bell-ring'></i>
                    <span class="noti-title"><?php echo $_GET['success'] ?></span>
                    <i class='bx bxs-bell-ring' style="margin-left: 6px; margin-right: 0;"></i>

                </div>
            </div>
        <?php } ?>
        <?php if (isset($_GET['delete'])) { ?>
            <div class="noti">
                <div class="noti-content">
                    <i class='bx bxs-bell-ring'></i>
                    <span class="noti-title"><?php echo $_GET['delete'] ?></span>
                    <i class='bx bxs-bell-ring' style="margin-left: 6px; margin-right: 0;"></i>

                </div>
            </div>
        <?php } ?>

        <?php if (isset($_GET['update'])) { ?>
            <div class="noti">
                <div class="noti-content">
                    <i class='bx bxs-bell-ring'></i>
                    <span class="noti-title"><?php echo $_GET['update'] ?></span>
                    <i class='bx bxs-bell-ring' style="margin-left: 6px; margin-right: 0;"></i>

                </div>
            </div>
        <?php } ?>

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
                        <h2>Tổng các đơn hàng</h2>
                        <a href="./form_insert.php" class="custom-btn btn-11">Thêm sản phẩm</a>
                    </div>
                    <?php
                    require '../connect.php';

                    $sql = "select 
oders.*,
user.name,
user.phone,
user.address
from oders
join user
on user.id = oders.customer_id";
                    $result = mysqli_query($connect, $sql);

                    ?>
                    <div class="sticky-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã</th>
                                    <th>Người nhận</th>
                                    <th>Người đặt</th>
                                    <th>Thời gian đặt</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Chi tiết</th>
                                    <th>Sửa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($result as $each) : ?>
                                    <tr>
                                        <td><?php echo $each['id'] ?></td>
                                        <td><?php echo $each['name_receiver'] ?><br>
                                            <?php echo $each['phone'] ?><br>
                                            <?php echo $each['address_receiver'] ?><br>
                                        </td>
                                        <td><?php echo $each['name'] ?><br>
                                            <?php echo $each['phone'] ?><br>
                                            <?php echo $each['address'] ?><br></td>


                                        <td><?php echo $each['created_at'];; ?></td>

                                        <td><?php echo $each['total_price'] ?></td>
                                        <td><?php
                                            switch ($each['status']) {
                                                case '0':
                                                    echo "mới đặt";
                                                    break;
                                                case '1':
                                                    echo "đã duyệt";
                                                    break;
                                                case '2':
                                                    echo "đã hủy";
                                                    break;
                                            }
                                            ?></td>
                                        <td><a href="detail.php?id=<?php echo $each['id'] ?>">
                                                xem
                                            </a></td>
                                        <td><a href="update.php?id=<?php echo $each['id'] ?>&status=1">
                                                duyệt
                                            </a><br>
                                            <a href="update.php?id=<?php echo $each['id'] ?>&status=2">
                                                hủy
                                            </a>
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