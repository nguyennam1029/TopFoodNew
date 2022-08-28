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
                        <h2>Tổng các đơn hàng</h2>
                        <button class="btn custom-btn btn-11">Xuất File Excel</button>
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
                    <div class="sticky-table" id="style-7">
                        <table id="table2excel">
                            <thead>
                                <tr>
                                    <th>Mã</th>
                                    <th>Người nhận</th>
                                    <th>Người đặt</th>
                                    <th>Thời gian đặt</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th class="noExl">Chi tiết</th>
                                    <th class="noExl">Cập nhật</th>
                                    <th class="noExl">Xóa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($result as $each) : ?>
                                    <tr>
                                        <td><?php echo $each['id'] ?></td>
                                        <td style="text-align: left;">- <?php echo $each['name_receiver'] ?><br>
                                            - <?php echo $each['phone'] ?><br>
                                            - <?php echo $each['address_receiver'] ?><br>
                                        </td>
                                        <td style="text-align: left;">- <?php echo $each['name'] ?><br>
                                            - <?php echo $each['phone'] ?><br>
                                            - <?php echo $each['address'] ?><br></td>


                                        <td><?php echo $each['created_at'] ?></td>

                                        <td><?php echo number_format($each['total_price']) ?> đ</td>
                                        <td>
                                            <span class="status 
                                            <?php
                                            switch ($each['status']) {
                                                case '0':
                                                    echo "pending";
                                                    break;
                                                case '1':
                                                    echo "inProgress";
                                                    break;
                                                case '2':
                                                    echo "return";
                                                    break;
                                            }
                                            ?>
                                            ">
                                                <?php
                                                switch ($each['status']) {
                                                    case '0':
                                                        echo "Đang chờ xử lí";
                                                        break;
                                                    case '1':
                                                        echo "Đã duyệt";
                                                        break;
                                                    case '2':
                                                        echo "Đã hủy";
                                                        break;
                                                }
                                                ?>
                                            </span>
                                        </td>
                                        <td class="noExl">
                                            <a href="detail.php?id=<?php echo $each['id'] ?>" class="custerm-btn status inProgress">
                                                <ion-icon name="eye-outline"></ion-icon>
                                                Xem
                                            </a>
                                        </td>

                                        <td class="noExl status-box">
                                            <a href="update.php?id=<?php echo $each['id'] ?>&status=1" class="custerm-btn status delivered">
                                                <ion-icon name="chevron-down-circle-outline"></ion-icon> Duyệt
                                            </a><br>

                                            <a href="update.php?id=<?php echo $each['id'] ?>&status=2" class="custerm-btn status return">
                                                <ion-icon name="remove-circle-outline"></ion-icon> Hủy
                                            </a>
                                            <br>

                                        </td>
                                        <td>
                                            <a href="delete.php?id=<?php echo $each['id'] ?>&status=2" class="custerm-btn status delete">
                                                <ion-icon name="trash"></ion-icon>
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
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./jquery.table2excel.min.js"></script>
    <script>
        $("button").click(function() {
            $("#table2excel").table2excel({
                excule: ".noExl",
                name: "Worksheet Name",
                filename: "Hóa đơn TopFood",
                fileext: ".xls",
                preserveColors: true
            })
        });
    </script>
</body>

</html>