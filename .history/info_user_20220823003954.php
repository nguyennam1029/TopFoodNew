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
    <link rel="stylesheet" href="./detail/detail.css">
    <link rel="stylesheet" href="./list_product/movieGenre.css" />
    <style>
        .info-active {
            background: linear-gradient(to right, #ff8a00, #ff2070);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-box-decoration-break: clone;
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
        $sql = "select * from user where id = $id";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);


        ?>

        <?php if (isset($_GET['success'])) { ?>
            <div class="noti">
                <div class="noti-content">
                    <i class='bx bxs-bell-ring'></i>
                    <span class="noti-title"><?php echo $_GET['success'] ?></span>
                    <i class='bx bxs-bell-ring' style="margin-left: 6px; margin-right: 0;"></i>

                </div>
            </div>
        <?php } ?>
        <?php if (isset($_GET['err'])) { ?>
            <div class="noti">
                <div class="noti-content">
                    <i class='bx bxs-bell-ring'></i>
                    <span class="noti-title"><?php echo $_GET['err'] ?></span>
                    <i class='bx bxs-bell-ring' style="margin-left: 6px; margin-right: 0;"></i>

                </div>
            </div>
        <?php } ?>
        <!--START CONTAINER  -->
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <?php include 'menu_user.php'
                    ?>
                </div>
                <div class="col-8">
                    <div class="info-right">
                        <div class="form-top">
                            <img src="./images/user_img/user.jpg" alt="">
                            <div class="form-top--info">
                                <h4><?php echo $each['name'] ?></h4>
                                <span><?php echo $each['address'] ?></span>
                            </div>
                        </div>
                        <form action="./process/update_info_user.php" method="post" class="info-form">
                            <input type="hidden" name="id" value="<?php echo $each['id'] ?>">

                            <div class="form-group">
                                <div class="form-item">
                                    <span class="form-item--title">
                                        Họ và Tên
                                    </span>
                                    <input type="text" class="form-item--input" name="name" value="<?php echo $each['name'] ?>" />
                                </div>
                                <div class="form-item">
                                    <span class="form-item--title">
                                        Email
                                    </span>
                                    <input type="text" class="form-item--input" name="email" value="<?php echo $each['email'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-item">
                                    <span class="form-item--title">
                                        Địa chỉ
                                    </span>
                                    <input type="text" class="form-item--input" name="address" value="<?php echo $each['address'] ?>">
                                </div>
                                <div class="form-item">
                                    <span class="form-item--title">
                                        Số điện thoại
                                    </span>
                                    <input type="number" class="form-item--input" name="phone" value="<?php echo $each['phone'] ?>">
                                </div>
                            </div>
                            <button class="info-user--btn custom-btn btn-11 hover-active">Lưu thông tin</button>
                        </form>
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