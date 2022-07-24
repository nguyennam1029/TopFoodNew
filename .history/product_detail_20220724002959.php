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
    <div class="app">

        <!-- NAV -->
        <div class="nav-wrapper">
            <div class="container">
                <div class="nav">
                    <a href="#" class="logo">
                        <i class='bx bx-movie-play bx-tada main-color'></i>Mov<span class="main-color">i</span>e - Plat<span class="main-color">F</span>orm
                    </a>
                    <ul class="nav-menu" id="nav-menu">
                        <li><a href="../index.html" class="nav-link ">Trang Chủ</a></li>
                        <li><a href="../index.html" class="nav-link">Phim Mới</a></li>
                        <li><a href="../index.html" class="nav-link">Phim Hay</a></li>
                        <li><a href="../index.html" class="nav-link">Phim Lẻ</a></li>
                        <li class="nav-item--type">
                            <a class="nav-link active nav-link--type">
                                <span class="nav-link--type-titel ">Thể Loại</span>
                                <!-- <i class="nav-link-icon fa fa-caret-down dropdown__caret"></i> -->
                                <i class="nav-link-icon fa fa-caret-down"></i>

                            </a>
                            <ul class="type-list">
                                <li class="type-item">
                                    <a href="../movieGenre/actionMovie.html" class="type-item--link">Phim Hành Động</a>
                                </li>
                                <li class="type-item">
                                    <a href="#" class="type-item--link">Phim Hài Hước</a>
                                </li>
                                <li class="type-item">
                                    <a href="#" class="type-item--link">Phim Viễn Tưởng</a>
                                </li>
                                <li class="type-item">
                                    <a href="#" class="type-item--link">Phim Chim Thám</a>
                                </li>
                                <li class="type-item">
                                    <a href="#" class="type-item--link">Phim Phiêu Lưu</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="../contact/contact.html" class="nav-link">Liên Hệ</a>
                        </li>
                        <li class="nav-menu--active">
                            <a class="custom-btn btn-11 hover-active">
                                <span>Đăng Nhập</span>
                            </a>
                        </li>
                        <li class="nav-menu--active custom-btn-sigup">
                            <a class="custom-btn btn-11 hover-active btn-sigup">
                                <span>Đăng Ký</span>
                            </a>
                        </li>
                    </ul>
                    <!-- MOBILE MENU TOGGLE -->
                    <div class="hamburger-menu" id="hamburger-menu">
                        <div class="hamburger"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END NAV -->

        <!-- START-PRODUCT-DETAIL  -->
        <?php
        $id = $_GET['id'];
        require 'admin/connect.php';
        $sql = " select * from products where id = $id";
        $result = mysqli_query($connect, $sql);
        $item_product = mysqli_fetch_array($result)

        ?>
        <!-- END-PHP-DETAIL  -->
        <div class="container" id="playMovie">

            <div class="container">
                <div class="row">
                    <div class="col-9 col-md-8 col-sm-12">
                        <div class="row product-info">
                            <div class="col-4 col-sm-12">

                                <div class="movie-img">
                                    <img src="./admin/san_pham/photos/<?php echo $item_product['photo'] ?>" alt="">
                                    <!-- <a href="https://hhhkungfu.tv/xem-phim-dau-pha-thuong-khung-phan-4/ep-1-sv1.html" class="movie-link">Xem Phim</a> -->
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
                                                <i class="fa-solid fa-cart-plus"></i>
                                                <span class="add-cart--title">Thêm vào giỏ hàng</span>
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
                                        <?php echo $item_product['description'] ?>
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
                                    <a href="#" class="play-movie--link">
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

        <!-- FOOTER SECTION -->
        <footer class="section footer-bg" data-aos="slide-up" data-aos-delay="100" data-aos-duration="700">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-6 col-sm-4">
                        <div class="footer-content">
                            <a href="#" class="logo">
                                <i class='bx bx-movie-play bx-tada main-color'></i>Mov<span class="main-color">i</span>e - Plat<span class="main-color">F</span>orm

                            </a>
                            <p>

                            </p>
                            <div class="social-list">
                                <a href="#" class="social-item">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                                <a href="#" class="social-item">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                                <a href="#" class="social-item">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-md-6 col-sm-8">
                        <div class="row" style="margin-top: 0;">
                            <div class="col-3 col-md-6 col-sm-6">
                                <div class="content">
                                    <p><b>Movie Platform</b></p>
                                    <ul class="footer-menu">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">My profile</a></li>
                                        <li><a href="#">Pricing plans</a></li>
                                        <li><a href="#">Contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-3 col-md-6 col-sm-6">
                                <div class="content">
                                    <p><b>Browse</b></p>
                                    <ul class="footer-menu">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">My profile</a></li>
                                        <li><a href="#">Pricing plans</a></li>
                                        <li><a href="#">Contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-3 col-md-6 col-sm-6">
                                <div class="content">
                                    <p><b>Help</b></p>
                                    <ul class="footer-menu">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">My profile</a></li>
                                        <li><a href="#">Pricing plans</a></li>
                                        <li><a href="#">Contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-3 col-md-6 col-sm-6">
                                <div class="content">
                                    <p><b>Download app</b></p>
                                    <ul class="footer-menu">
                                        <li>
                                            <a href="#">
                                                <img src="../images/google-play.png" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="../images/app-store.png" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER SECTION -->
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
    <script src="./detail.js"></script>


</body>

</html>