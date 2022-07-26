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
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./grid.css">
    <link rel="stylesheet" href="./app.css">
    <link rel="stylesheet" href="./detail/detail.css">
</head>

<body>
    <style>
        .toast {
            position: fixed;
            top: 60px;
            right: 30px;
            border-radius: 6px;
            background: #f9f9f9;
            /* padding: 2px 35px 20px 25px; */
            padding: 7px 10px;
            box-shadow: 0 5px 10px rgb(0 0 0 / 10%);
            border-left: 4px solid #43d94c;
            overflow: hidden;
            transform: translateX(calc(100% + 30px));
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.35);
        }

        .toast.active {
            transform: translateX(0%);
        }

        .toast .toast-content {
            display: flex;
            align-items: center;
        }

        .toast-content .check {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 20px;
            width: 20px;
            background-color: #47d864;
            color: #fff;
            font-size: 16px;
            border-radius: 50%;
        }

        .toast-content .message {
            display: flex;
            flex-direction: column;
            margin: 0 20px;
        }

        .message .text {
            font-size: 14px;
            font-weight: 400;
            color: #666666;
        }

        .message .text.text-1 {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            line-height: 26px;
        }

        .text.text-2 {
            display: block;
            margin-bottom: 4px;
        }

        .toast .close {
            position: absolute;
            top: 5px;
            right: 11px;
            padding: 5px;
            cursor: pointer;
            font-size: 18px;
            opacity: 0.7;
            color: #333;
        }

        .toast .close:hover {
            opacity: 1;
        }

        .toast .progress {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            width: 100%;
            background: #ddd;
        }

        .toast .progress:before {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            height: 100%;
            width: 100%;
            background-color: #47d864;
        }

        .progress.active:before {
            animation: progress 5s linear forwards;
        }

        @keyframes progress {
            100% {
                right: 100%;
            }
        }

        /* END-TOAST  */
    </style>
    <div class="app">
        <style>
            .nav-link.active {
                background: linear-gradient(to right, #ffffff, #ffffff) !important;
                -webkit-background-clip: text !important;
                -webkit-text-fill-color: transparent;
                -webkit-box-decoration-break: clone;
                font-weight: 500;
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
                                        <li class="item"><span>Giá :</span><?php echo $item_product['price'] ?> đ</li>
                                        <li class="item"><span>Trạng thái :</span> Còn bán</li>
                                        <li class="item">
                                            <span>Số lượng :</span>
                                            <div class="quantity">
                                                <span class="quantity-item quantity-decrement">-</span>
                                                <input type="text" class="quantity-item quantity-title" value='1' />
                                                <span class="quantity-item quantity-increment">+</span>
                                            </div>
                                        </li>
                                        <li class="item list-cart">
                                            <p class="cart-item buy-now">Mua ngay</p>

                                            <p class="cart-item add-cart">
                                                <i class="fa-solid fa-cart-plus add-cart--icon"></i>

                                                <?php if (!empty($_SESSION['id'])) { ?>
                                                    <a href="add_to_cart.php?id=<?php echo $item_product['id'] ?>" class="add-cart--title">Thêm vào giỏ hàng </a>
                                                <?php } ?>
                                            </p>
                                        </li>

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
                                        Ngoài yếu tố tu luyện khô khan ra, cái tình cũng rất đặc sắc trong truyện, như là thứ tiếp thêm sức mạnh cho Tiêu Viêm. Kết bạn với bao nhiêu bằng hữu trên hành trình, tìm thấy người mình yêu thương, tất cả đã làm nên cái hay, cái cảm động của Đấu Phá Thương Khung. Tiêu Huân Nhi- từ nhỏ đã được đưa đến Tiêu Tộc, nàng là thanh mai trúc mã, người yêu cũng như vợ của Tiêu Viêm. Nàng có thể vì hắn ta cam chịu nhiều thiệt thòi. Tuy nàng là con cháu thế gia, nhưng vẫn 1 mực bên cạnh Tiêu Viêm khi có thể. Nàng chỉ ước được bên cạnh hắn suốt đời dù đến cuối truyện, ước mơ đó mới thành sự thật. Thải Lân- nàng mang huyết mạch của 1 thần thú viễn cổ. Tuy bá đạo, phách lối, nhưng vẫn không thể ngừng nhung nhớ về Tiêu Viêm. Người đọc có thể bật cười sảng khoái, hay nồng mặn suýt xoa mỗi khi đọc đến đoạn có Tiêu Viêm và 2 nàng. Rồi còn rất nhiều các nữ tử xinh đẹp khác một mực tơ tưởng về một Tiêu Viêm bình thường, không thể bình thường hơn.
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
                                        <img src="../images/product/sale1.webp" alt="">
                                    </a>
                                    <!-- END MOVIE ITEM -->
                                    <!-- start MOVIE ITEM -->
                                    <a href="#" class="slider-img">
                                        <img src="../images/product/sale2.webp" alt="">
                                    </a>
                                    <!-- END MOVIE ITEM -->
                                    <!-- start MOVIE ITEM -->
                                    <a href="#" class="slider-img">
                                        <img src="../images/product/1.jpg" alt="">
                                    </a>
                                    <!-- END MOVIE ITEM -->
                                    <!-- start MOVIE ITEM -->
                                    <a href="#" class="slider-img">
                                        <img src="../images/product/Haisan/bach-tuoc-0.jpg" alt="">
                                    </a>
                                    <!-- END MOVIE ITEM -->
                                    <!-- start MOVIE ITEM -->
                                    <a href="#" class="slider-img">
                                        <img src="../images/product/Haisan/haisan2.jpg" alt="">
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
                    <span class="text text-1">Thành công</span>
                    <span class="text text-2">Sản phẩm đã được thêm vào giỏ hàng</span>
                </div>
            </div>
            <i class="fa-solid fa-xmark close"></i>

            <div class="progress"></div>
        </div>
        <!-- END-TOAST  -->


        <!-- BACK TO TOP -->
        <a href="#" class="backtotop">
            <i class='bx bx-chevron-up'></i>
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
        const buttonToast = document.querySelector(".add-cart--icon"),
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
</body>

</html>