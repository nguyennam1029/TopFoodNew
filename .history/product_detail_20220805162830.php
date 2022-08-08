<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- BOX ICONS -->
    <!-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="./plugin/fontawesome-free-6.1.2-web//css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./grid.css">
    <link rel="stylesheet" href="./app.css">
    <link rel="stylesheet" href="./detail/detail.css">
</head>

<body>

    <div class="app">
        <style>
            .nav-link.active {
                background: linear-gradient(to right, #ffffff, #ffffff) !important;
                -webkit-background-clip: text !important;
                -webkit-text-fill-color: transparent;
                -webkit-box-decoration-break: clone;
                font-weight: 500;
            }

            .active-false {
                position: relative;
            }

            .active-false::before {
                content: 'Vui lòng đăng kí';
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background-color: #322d2d;
            }
        </style>

        <!-- NAV -->
        <?php include 'menu.php'
        ?>
        <!-- END NAV -->


        <!-- START-PRODUCT-DETAIL  -->
        <?php
        $id = $_GET['id'];
        require 'admin/connect.php';
        $sql = " select * from products where id = $id";
        $result = mysqli_query($connect, $sql);
        $item_product = mysqli_fetch_array($result);

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

        <div class="container" id="playMovie">

            <div class="container">
                <div class="row">
                    <div class="col-9 col-md-8 col-sm-12">
                        <div class="row product-info">
                            <div class="col-4 col-sm-12">

                                <div class="movie-img">
                                    <img src="./admin/san_pham/photos/<?php echo $item_product['photo'] ?>" alt="">

                                </div>
                            </div>
                            <div class="col-8 col-sm-12">
                                <div class="moive-info">

                                    <div class="rating">
                                        <h5 class="rating-heading"><?php echo $item_product['name'] ?></h5>
                                        <ul class="rating-list">
                                            <li class="rating-item"><i class="rating-item--icon fa-solid fa-star"></i></li>
                                            <li class="rating-item"><i class="rating-item--icon fa-solid fa-star"></i></li>
                                            <li class="rating-item"><i class="rating-item--icon fa-solid fa-star"></i></li>
                                            <li class="rating-item"><i class="rating-item--icon fa-solid fa-star"></i></li>
                                            <li class="rating-item"><i class="fa-solid fa-star"></i></li>

                                        </ul>
                                        <p class="rating-titel">
                                            ( 4.5 điểm / 9.2 Triệu lượt )
                                        </p>

                                    </div>
                                    <!-- <p class="moive-info--time">
                                        <i class="moive-info--icon fa-solid fa-clock-rotate-left"></i>
                                        <span>22 Phút</span>
                                    </p> -->
                                    <ul class="list">
                                        <li class="item"><span>Mã giảm giá :</span>
                                            <div class="list-voucher">
                                                <div class="voucher-ticket">
                                                    <span class="voucher-ticket--title">Giảm 15k</span>
                                                </div>
                                                <div class="voucher-ticket">
                                                    <span class="voucher-ticket--title">Giảm 30k</span>
                                                </div>
                                                <div class="voucher-ticket">
                                                    <span class="voucher-ticket--title">Giảm 99k</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item"><span>Giá :</span><?php echo number_format($item_product['price']) ?> đ</li>
                                        <li class="item"><span>Trạng thái :</span> Còn bán</li>
                                        <form action="add_to_cart.php" method="GET">
                                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                            <li class="item">
                                                <span>Số lượng :</span>
                                                <div class="quantity">
                                                    <span class="quantity-item quantity-decrement" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-</span>
                                                    <input name="quantity" type="number" min="1" class="quantity-item quantity-title" value='1' />
                                                    <span class="quantity-item quantity-increment" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+</span>
                                                </div>
                                            </li>
                                            <li class="item list-cart">
                                                <p class="cart-item buy-now">Mua ngay</p>

                                                <?php if (!empty($_SESSION['id'])) { ?>
                                                    <p class="cart-item add-cart ">
                                                        <i class="fa-solid fa-cart-plus add-cart--icon"></i>
                                                        <button class="add-cart--title">Thêm vào giỏ hàng </button>
                                                    </p>
                                                <?php } else { ?>
                                                    <p class="cart-item add-cart add-cart--false">
                                                        <i class="fa-solid fa-cart-plus add-cart--icon"></i>
                                                        <span class="add-cart--title">Thêm vào giỏ hàng </span>
                                                    </p>
                                                <?php } ?>

                                            </li>
                                        </form>

                                    </ul>

                                </div>

                            </div>
                        </div>


                        <!-- --------cast-dàn diễn viên----------- -->

                        <!-- --------story-line-cốt truyện---------- -->

                        <div class="row">
                            <div class="col-12">
                                <h3 class="detail-product--title">Thông tin sản phẩm</h3>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="storyline">
                                    <p class="storyline-info">
                                        <?php echo nl2br($item_product['description']) ?>
                                    <p class="storyline-info storyline-info--none">
                                        Đặc điểm của thăn lưng bò hữu cơ Obe
                                        <br>
                                        -Thịt thăn lưng bò Úc hữu cơ Obe có tên tiếng Anh là Cube Roll. <br> Phần thịt này được lấy từ giống bò hữu cơ được chăn thả hoàn toàn tự nhiên ở bang Queensland và một số bang miền Nam nước Úc.
                                        <br>
                                        thăn lưng bò Obe từ giống bò hữu cơ được chăn thả tự nhiên
                                        <br>
                                        - Được sinh trưởng trong môi trường hoàn toàn tự nhiên, <br> thức ăn đến từ các loại cỏ và thảo mộc, <br> những chú bò Obe có sức khỏe tốt, đem đến chất lượng thịt cao và hàm lượng dinh dưỡng dồi dào
                                    </p>
                                    <p class="storyline-block ">
                                        <span class="storyline-block--titel">Xem Thêm</span>
                                        <i class="storyline-block--icon bx bx-chevron-down"></i>
                                    </p>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <!-- --------photo-ảnh truyện---------- -->
                        <!-- LATEST MOVIES SECTION -->
                        <div>
                            <div class="container">
                                <!-- -------- text liner----- -->
                                <div class="photo-detail">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="main-video--title">Hình ảnh liên quan</h3>

                                        </div>
                                    </div>


                                </div>
                                <!-- --- End--text--liner--- -->

                                <div class="movies-slide2 carousel-nav-center owl-carousel" id="test">
                                    <!-- start MOVIE ITEM -->
                                    <a href="#" class="slider-img">
                                        <img src="./images/product/Meat/bap-bo-0.jpg" alt="">
                                    </a>
                                    <!-- END MOVIE ITEM -->
                                    <!-- start MOVIE ITEM -->
                                    <a href="#" class="slider-img">
                                        <img src="./images/product/Haisan/bach-tuoc-0.jpg" alt="">
                                    </a>
                                    <!-- END MOVIE ITEM -->
                                    <!-- start MOVIE ITEM -->
                                    <a href="#" class="slider-img">
                                        <img src="./images/product/thitLon/ba-roi-heo-0.jpg" alt="">
                                    </a>
                                    <!-- END MOVIE ITEM -->
                                    <!-- start MOVIE ITEM -->
                                    <a href="#" class="slider-img">
                                        <img src="./images/product/sashime/sashimi2.jpg" alt="">
                                    </a>
                                    <!-- END MOVIE ITEM -->
                                    <!-- start MOVIE ITEM -->
                                    <a href="#" class="slider-img">
                                        <img src="./images/product/Meat/bap-bo-obe-0.jpg" alt="">
                                    </a>
                                    <!-- END MOVIE ITEM -->
                                </div>
                            </div>
                        </div>

                        <!-- --------budget diễn viên----------- -->
                        <div class="row">
                            <div class="col-12">
                                <h3 class="main-video--title">Doanh thu</h3>

                            </div>
                            <div class="row" style="margin: 20px 0;">
                                <!-- -budget--item---------------------- -->
                                <div class="col-6">
                                    <div class="budget-item">
                                        <h5 class="budget-item--titel">Ngân sách</h5>
                                        <p class="budget-item--price">$90,000,000 (Ước lượng)</p>
                                    </div>
                                </div>

                                <!-- -budget--item---------------------- -->
                                <div class="col-6">
                                    <div class="budget-item">
                                        <h5 class="budget-item--titel">Trung quốc</h5>
                                        <p class="budget-item--price">$123,000,000</p>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="budget-item">
                                        <h5 class="budget-item--titel">Việt Nam</h5>
                                        <p class="budget-item--price">$199,000,000</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="budget-item">
                                        <h5 class="budget-item--titel">Gross US & Canada</h5>
                                        <p class="budget-item--price">$99,000,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- --------timer diễn viên----------- -->

                        <!-- END LATEST MOVIES SECTION -->
                    </div>

                    <!-- ------------xem nhiều-------- -->
                    <!-- START-PHP-XEMNHIEU  -->
                    <?php

                    require 'admin/connect.php';
                    $sql = " select * from products where manufacturer_id=N'1' limit 10";
                    $result = mysqli_query($connect, $sql);

                    ?>
                    <div class="col-3 col-md-4 col-sm-12">
                        <div class="see-more">

                            <div class="list-item">
                                <h3 class="play-movie--heading">Xem Nhiều</h3>
                                <!-- --START-ITEM  -->
                                <?php foreach ($result as $seemore) : ?>
                                    <a href="product_detail.php?id=<?php echo $seemore['id'] ?>" class="play-movie--link">
                                        <img src="admin/san_pham/photos/<?php echo $seemore['photo'] ?>" alt="" class="play-movie--img">
                                        <div class="recoment-product">
                                            <p class="play-movie--name"><?php echo $seemore['name'] ?></p>
                                            <ul class="rating-list recoment">
                                                <li class="rating-item"><i class="rating-item--icon fa-solid fa-star"></i></li>
                                                <li class="rating-item"><i class="rating-item--icon fa-solid fa-star"></i></li>
                                                <li class="rating-item"><i class="rating-item--icon fa-solid fa-star"></i></li>
                                                <li class="rating-item"><i class="rating-item--icon fa-solid fa-star"></i></li>
                                                <li class="rating-item"><i class="fa-solid fa-star"></i></li>

                                            </ul>
                                            <span><?php echo $seemore['price'] ?> đ</span>
                                        </div>
                                    </a>

                                <?php endforeach ?>



                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <!-- <div class="play-movie">
            <div class="main-video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qGLkpBwNC0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3 class="main-video--title">Đấu phá thương khung</h3>
            </div>
            
        </div> -->
        </div>
        <!-- END-PHP-DETAIL  -->

        <!-- FOOTER SECTION -->
        <?php include 'footer.php'
        ?>
        <!-- END FOOTER SECTION -->

        <!-- TOAST -->
        <div class="toast">
            <div class="toast-content">
                <i class="fas fa-solid fa-check check"></i>

                <div class="message">
                    <span class="text text-1">Thất bại</span>
                    <span class="text text-2">Sản phẩm không thêm được vào giỏ hàng</span>
                </div>
            </div>
            <i class="fa-solid fa-xmark close"></i>

            <div class="progress"></div>
        </div>
        <!-- END-TOAST  -->


        <!-- BACK TO TOP -->
        <a href="#" class="backtotop">
            <i class="fa-solid fa-angle-up"></i>
        </a>
        <!--END BACK TO TOP -->
    </div>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="./detail/detail.js"></script>

    <script>
        // -- START-TOAST
        const buttonToast = document.querySelector(".add-cart--false"),
            toast = document.querySelector(".toast");
        (closeIcon = document.querySelector(".close")),
        (progress = document.querySelector(".progress"));

        let timer1, timer2;
        console.log("toast", buttonToast);
        buttonToast.addEventListener("click", () => {
            toast.classList.add("active");
            progress.classList.add("active");

            timer1 = setTimeout(() => {
                toast.classList.remove("active");
            }, 5000); //1s = 1000 milliseconds

            timer2 = setTimeout(() => {
                progress.classList.remove("active");
            }, 5300);
        });

        closeIcon.addEventListener("click", () => {
            toast.classList.remove("active");

            setTimeout(() => {
                progress.classList.remove("active");
            }, 300);

            clearTimeout(timer1);
            clearTimeout(timer2);
        });
        // --END-TOAST
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</body>

</html>