<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thể loại</title>
    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Rubik+Wet+Paint&display=swap" rel="stylesheet" />
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!-- ---aos-- -->
    <!-- <link rel="stylesheet" href="aos-2/dist/aos.css"> -->
    <!-- APP CSS -->
    <!-- <link rel="stylesheet" href="form/form_style.css"> -->
    <link rel="stylesheet" href="./grid.css" />
    <link rel="stylesheet" href="./app.css" />
    <link rel="stylesheet" href="./admin/assets/css/style.css">

    <style>
        .order-active {
            background: linear-gradient(to right, #ff8a00, #ff2070);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
        }

        td {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="app">
        <!-- NAV -->
        <?php include './menu.php'
        ?>
        <!-- END NAV -->


        <?php

        $id = $_SESSION['id'];


        require './admin/connect.php';
        $sql = "select * from oders where customer_id = $id";
        $result = mysqli_query($connect, $sql);



        ?>


        <!--START CONTAINER  -->
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <?php include 'menu_user.php'
                    ?>
                </div>
                <div class="col-9">
                    <div class="info-right">
                        <div class="sticky-table">
                            <table>
                                <thead>
                                    <tr>

                                        <th>Người nhận</th>
                                        <th>Ngày đặt</th>
                                        <th>Số lượng </th>
                                        <th>Giá</th>
                                        <th>Trạng thái</th>
                                        <th>Chi tiết</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($result as $each) : ?>
                                        <tr>

                                            <td><?php echo $each['name_receiver'] ?></td>

                                            <td><?php echo $each['created_at'] ?></td>

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
                                            <td>
                                                <a href="form_update2.php?id=<?php echo $each['id'] ?>">
                                                    <ion-icon name="create-outline" class="product-item--icon status delivered"></ion-icon>
                                                </a>
                                            </td>


                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--END CONTAINER  -->

        <?php
        require './footer.php';
        ?>
        <!-- END FOOTER SECTION -->
        <!-- BACK TO TOP -->
        <a href="#" class="backtotop">
            <i class="bx bx-chevron-up"></i>
        </a>
        <!--END BACK TO TOP -->

        <script src="./list_product/product.js"></script>
    </div>
</body>

</html>