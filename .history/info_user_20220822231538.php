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
</head>

<body>
    <div class="app">
        <!-- NAV -->
        <?php include './menu.php'
        ?>
        <!-- END NAV -->

        <!--START CONTAINER  -->
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="info-left">
                        <h2 class="info-left--heading">Thông tin người dùng</h2>
                        <ul class="info_left--list">
                            <a href="#" class="info-left--item">
                                <i class='bx bx-user'></i>Thông tin
                            </a>
                            <a href="#" class="info-left--item">
                                <i class='bx bx-heart'></i>
                                Yêu thích
                            </a>
                            <a href="#" class="info-left--item"><i class='bx bx-star'></i>
                                Theo dõi
                            </a>
                            <a href="#" class="info-left--item"><i class='bx bx-cog'></i>
                                Cài đặt
                            </a>
                            <a href="#" class="info-left--item"><i class='bx bx-bell'></i>
                                Thông báo
                            </a>
                            <a href="#" class="info-left--item">
                                <i class='bx bx-log-out-circle'></i>
                                Thoát
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-8">
                    <div class="info-right">
                        <div class="form-top">
                            <img src="./images/user_img/user.jpg" alt="">
                            <div class="form-top--info">
                                <h4>Nguyễn Văn Nam</h4>
                                <span>Hai bà trưng - Hà Nội</span>
                            </div>
                        </div>
                        <form action="" class="info-form">
                            <div class="form-group">
                                <div class="form-item">
                                    <span class="form-item--title">
                                        Họ và Tên
                                    </span>
                                    <input type="text" class="form-item--input">
                                </div>
                                <div class="form-item">
                                    <span class="form-item--title">
                                        Email
                                    </span>
                                    <input type="text" class="form-item--input">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-item">
                                    <span class="form-item--title">
                                        Địa chỉ
                                    </span>
                                    <input type="text" class="form-item--input">
                                </div>
                                <div class="form-item">
                                    <span class="form-item--title">
                                        Số điện thoại
                                    </span>
                                    <input type="number" class="form-item--input">
                                </div>
                            </div>
                            <button class="custom-btn btn-11 hover-active">Lưu thông tin</button>
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