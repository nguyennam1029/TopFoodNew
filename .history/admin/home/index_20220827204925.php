<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <style>
        .active-bg--home {
            background-color: var(--white) !important;
            pointer-events: none;

        }

        .active-text--home {
            color: var(--blue) !important;

        }

        .active-text--home::before {
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

        .active-text--home::after {
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

        .chart {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
            width: 100%;
            border: 1px solid #9b9b9b;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <?php include '../menu2.php' ?>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <?php
            include '../top_menu.php';
            ?>

            <!-- ======================= Cards ================== -->

            <?php
            require '../connect.php';

            // $products = "SELECT COUNT(*) as 'dem' FROM products";
            $product = mysqli_query($connect, "SELECT COUNT(*) as 'dem' FROM products");
            $result_product = mysqli_fetch_assoc($product);

            $users = mysqli_query($connect, "SELECT COUNT(*) as 'dem' FROM user");
            $result_users = mysqli_fetch_assoc($users);

            // $donhang = mysqli_query($connect, "SELECT COUNT(*) as 'dem' FROM orders");
            // $res1 = mysqli_fetch_assoc($donhang);

            $message = mysqli_query($connect, "SELECT COUNT(*) as 'dem' FROM  contact ");
            $result_message = mysqli_fetch_assoc($message);


            ?>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $result_users['dem']; ?></div>
                        <div class="cardName">Người dùng</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $result_product['dem'] ?></div>
                        <div class="cardName">Sản phẩm</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $result_message['dem']; ?></div>
                        <div class="cardName">Tin nhắn</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Tổng doanh thu</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="chart">
                <img src="../../images/chart.png" alt="">
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