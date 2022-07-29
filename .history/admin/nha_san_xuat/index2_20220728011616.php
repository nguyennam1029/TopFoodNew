<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css" />

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
                    <div class="cardHeader">
                        <h2>Sản phẩm đã đăng</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <div class="sticky-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Loại</th>
                                    <th>Giá</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Star Refrigerator</td>

                                    <td>
                                        <div class="user">
                                            <img src="https://source.unsplash.com/random" alt="" />

                                        </div>
                                    </td>
                                    <td>Sashimi</td>
                                    <td>$1200</td>
                                    <td>
                                        <ion-icon name="create-outline" class="product-item--icon status delivered"></ion-icon>
                                    </td>
                                    <td><span class="">
                                            <ion-icon name="trash-outline" class="status return"></ion-icon>
                                        </span></td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Star Refrigerator</td>

                                    <td>
                                        <div class="user">
                                            <img src="https://source.unsplash.com/random" alt="" />

                                        </div>
                                    </td>
                                    <td>Sashimi</td>
                                    <td>$1200</td>
                                    <td>
                                        <ion-icon name="create-outline" class="product-item--icon status delivered"></ion-icon>
                                    </td>
                                    <td><span class="">
                                            <ion-icon name="trash-outline" class="status return"></ion-icon>
                                        </span></td>

                                </tr>
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