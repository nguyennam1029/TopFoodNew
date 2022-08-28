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
        .active-bg--category {
            background-color: var(--white) !important;
            pointer-events: none;

        }

        .active-text--category {
            color: var(--blue) !important;

        }

        .active-text--category::before {
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

        .active-text--category::after {
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
                        <h2>Các danh mục</h2>
                        <a href="form_insert.php" class="custom-btn btn-11">Thêm danh mục</a>
                    </div>
                    <?php
                    require('../connect.php');
                    $sql = "select * from manufacturers";
                    $result = mysqli_query($connect, $sql);
                    ?>
                    <div class="sticky-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã</th>
                                    <th>Tên danh mục</th>

                                    <th>Mô tả</th>

                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($result as $each) : ?>
                                    <tr>
                                        <td><?php echo $each['id'] ?></td>
                                        <td><?php echo $each['namensx'] ?></td>


                                        <td><?php echo $each['address'] ?></td>

                                        <td>
                                            <a href="./form_update.php?id=<?php echo $each['id'] ?>">
                                                <ion-icon name="create-outline" class="product-item--icon status delivered text" style=""></ion-icon>
                                            </a>
                                        </td>
                                        <td><span class="">
                                                <a href="delete.php?id=<?php echo $each['id'] ?>">
                                                    <ion-icon name="trash-outline" class="product-item--icon status return"></ion-icon>
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


        </div>
    </div>


    <!-- =========== Scripts =========  -->
    <script src="../assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>