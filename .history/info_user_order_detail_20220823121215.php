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
        $oder_id = $_GET['id'];
        require './admin/connect.php';

        $sql = "select
    *
    from oder_product
    join products on products.id = oder_product.product_id 
    where oder_id = '$oder_id'";
        $result = mysqli_query($connect, $sql);
        $sum = 0;
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

                                        <th>Ảnh sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng </th>
                                        <th>Giá</th>
                                        <th>Tổng tiền</th>


                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($result as $each) : ?>
                                        <tr>

                                            <td>
                                                <div class="user">
                                                    <img src="./admin/san_pham/photos/<?php echo $each['photo'] ?>" alt="" />

                                                </div>
                                            </td>


                                            <td><?php echo $each['name'] ?></td>


                                            <td><?php echo $each['quantity'] ?></td>
                                            <td><?php echo number_format($each['price']) ?> đ</td>
                                            <td>
                                                <?php
                                                $result = $each['price'] * $each['quantity'];
                                                echo number_format($result);
                                                $sum += $result;
                                                ?> đ
                                            </td>


                                        </tr>
                                    <?php endforeach ?>
                                    <tr>
                                        <td>Tổng tiền hóa đơn</td>
                                        <td col='4'>Tổng tiền hóa đơn</td>
                                    </tr>
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