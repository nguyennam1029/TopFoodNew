<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Top Food</title>
  <link rel="shortcut icon" href="https://hhhkungfu.tv/wp-content/uploads/2021/12/1-copy.png" type="image/x-icon" />

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
  <!-- <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="./plugin/fontawesome-free-6.1.2-web/css/all.min.css">
  <!-- ---aos-- -->
  <!-- <link rel="stylesheet" href="aos-2/dist/aos.css"> -->
  <!-- APP CSS -->
  <!-- <link rel="stylesheet" href="form/form_style.css"> -->
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="app.css" />
</head>

<body>
  <div class="app">
    <?php include 'menu.php'
    ?>


    <?php if (isset($_GET['notiCart'])) { ?>
      <div class="noti">
        <div class="noti-content">
          <i class='bx bxs-bell-ring'></i>
          <span class="noti-title">Bạn vui lòng: Đăng ký hoặc Đăng nhập</span>
          <i class='bx bxs-bell-ring' style="margin-left: 6px; margin-right: 0;"></i>

        </div>
      </div>
    <?php } ?>

    <?php if (isset($_GET['success'])) { ?>
      <div class="noti">
        <div class="noti-content">
          <i class="fa-solid fa-truck-moving"></i>
          <span class="noti-title">Đơn hàng đang xử lý ...</span>


        </div>
      </div>
    <?php } ?>
    <!-- HERO SECTION -->
    <div class="hero-section">
      <!-- HERO SLIDE -->
      <div class="hero-slide">
        <div class="owl-carousel carousel-nav-center" id="hero-carousel">

          <!-- SLIDE ITEM -->
          <div class="hero-slide-item">
            <img src="./images/banner/vc.jpg" alt="" />
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
              <div class="item-content-wraper">
                <div class="item-content-title top-down">
                  <div class="item-content-title--color">
                    Vịt quay Bắc Kinh
                  </div>
                </div>
                <div class="flash-infos top-down delay-2"></div>
                <div class="item-content-description top-down delay-4">
                  Vịt quay Bắc Kinh là món ăn nổi tiếng bởi sự hấp dẫn thơm ngon của phần da vịt bóng vàng, đẹp mắt. Mặc dù tốn nhiều thời gian, nhưng nhiều người vẫn muốn tự tay chế biến món ăn này tại nhà
                </div>
                <div class="item-action top-down delay-6">
                  <a href="./detail/WandaVision.html" class="custom-btn block btn-11">
                    <i class="bx bxs-right-arrow"></i>
                    <span>Mua Ngay</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- END SLIDE ITEM -->

          <!-- SLIDE ITEM -->
          <div class="hero-slide-item">
            <img src="./images/banner/banner6.jpg" alt="" />
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
              <div class="item-content-wraper">
                <div class="item-content-title top-down">
                  <div class="item-content-title--color">
                    Rau, củ, quả Đà Lạt
                  </div>
                </div>
                <div class="flash-infos top-down delay-2"></div>
                <div class="item-content-description top-down delay-4">
                  Với nhiều năm hoạt động, RAU SẠCH XANH - RAU CỦ QUẢ đang dần trở thành nhà cung cấp rau củ quả quen thuộc và tin cậy của nhiều siêu thị, nhà hàng, bếp ăn,.... trên địa bàn TP.HCM, Bình Dương, Đồng Nai,... và các tỉnh lân cận.
                </div>
                <div class="item-action top-down delay-6">
                  <a href="./detail/WandaVision.html" class="custom-btn block btn-11">
                    <i class="bx bxs-right-arrow"></i>
                    <span>Mua Ngay</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- END SLIDE ITEM -->

          <!-- SLIDE ITEM -->
          <div class="hero-slide-item">
            <img src="./images/banner/bannerpiza.jpg" alt="" />
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
              <div class="item-content-wraper">
                <div class="item-content-title top-down">
                  <div class="item-content-title--color">
                    Black Angus Úc lõi vai
                  </div>
                </div>
                <div class="flash-infos top-down delay-2"></div>
                <div class="item-content-description top-down delay-4">
                  Thịt bò Black Angus Úc tại BioFarm hay còn gọi là “Bò đen”, được ăn bổ sung thêm hạt dinh dưỡng và ngũ cốc trong số ngày quy định để đạt các mức giá trị dinh dưỡng khác nhau
                </div>
                <div class="item-action top-down delay-6">
                  <a href="./detail/WandaVision.html" class="custom-btn block btn-11">
                    <i class="bx bxs-right-arrow"></i>
                    <span>Mua Ngay</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- END SLIDE ITEM -->

          <!-- SLIDE ITEM -->
          <div class="hero-slide-item">
            <img src="./images/banner/banner4.jpg" alt="" />
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
              <div class="item-content-wraper">
                <div class="item-content-title top-down">
                  <p class="item-content-title--color">Rau xanh</p>
                </div>
                <div class="flash-infos top-down delay-2"></div>
                <div class="item-content-description top-down delay-4">
                  Rau củ quả thường bị dập trong quá trình vận chuyển. Trường
                  hợp quả táo bị dập sẽ có vết đốm nâu do oxy len lỏi vào
                  trong tạo ra melanin có màu nâu (do phản ứng giữa các enzym,
                  tannin và oxy).
                </div>
                <div class="item-action top-down delay-6">
                  <a href="./detail/star.html" class="custom-btn block btn-11">
                    <i class="bx bxs-right-arrow"></i>
                    <span>Mua Ngay</span>

                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- END SLIDE ITEM -->
        </div>
      </div>
      <!-- END HERO SLIDE -->
    </div>
    <!-- End-list slider  -->

    <!-- Start flash sale -->
    <div class="section" id="series">
      <div class="container">
        <div class="section-header">
          <p class="booton-text">
            flash sale
            <!-- <img style="filter: brightness(0%);" class="flash-sale--logo" src="images/flashsale.svg" alt="" /> -->
          </p>
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel">
          <?php

          require './admin/connect.php';
          $sql = " select * from products where manufacturer_id=N'12' limit 10";
          $result = mysqli_query($connect, $sql);
          ?>
          <?php foreach ($result as $flashSale) : ?>

            <a href="product_detail.php?id=<?php echo $flashSale['id'] ?>" class="flash-item">
              <img class="flash-image" src="./admin/san_pham/photos/<?php echo $flashSale['photo'] ?>" alt="" />
              <div class="flash-item-content">
                <p class="flash-item-title">
                  <?php echo $flashSale['name'] ?>
                </p>
                <div class="flash-infos">
                  <div class="flash-info">
                    <i class="fa-solid fa-star"></i>
                    <span>4.5</span>
                  </div>

                  <div class="flash-info">
                    <span class="flash-info--price">
                      <?php echo number_format($flashSale['price']) ?>
                      đ</span>
                  </div>
                </div>
              </div>
              <span class="flash-sale--title">Giảm giá</span>
            </a>
          <?php endforeach ?>

        </div>
      </div>
    </div>
    <!-- END flash sale -->

    <!-- --START-BANNER-HẢI SẢN  -->
    <div class="section">
      <div class="container">
        <div class="banner">
          <img src="./images/banner/banner-sashimi.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- --END-BANNER-HẢI SẢN  -->

    <!-- --START-SHASIMI  -->
    <div class="section" id="series">
      <div class="container">
        <div class="section-header">
          <p class="booton-text">Shasimi</p>
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel">
          <?php
          $sql = " select * from products where manufacturer_id=N'2' limit 10";
          $result = mysqli_query($connect, $sql);
          ?>
          <?php foreach ($result as $flashSale) : ?>

            <a href="product_detail.php?id=<?php echo $flashSale['id'] ?>" class="flash-item">
              <img class="flash-image" src="./admin/san_pham/photos/<?php echo $flashSale['photo'] ?>" alt="" />
              <div class="flash-item-content">
                <p class="flash-item-title">
                  <?php echo $flashSale['name'] ?>
                </p>
                <div class="flash-infos">
                  <div class="flash-info">
                    <i class="fa-solid fa-star"></i>
                    <span>4.5</span>
                  </div>

                  <div class="flash-info">
                    <span class="flash-info--price">
                      <?php echo number_format($flashSale['price']) ?>
                      đ</span>
                  </div>
                </div>
              </div>
            </a>
          <?php endforeach ?>

        </div>
      </div>
    </div>
    <!-- END-HẢI SẢN  -->

    <!-- --START-BANNER-Thịt  -->
    <div class="section">
      <div class="container">
        <div class="banner">
          <img src="images/banner/banner-bo-my-black-angus.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- --END-BANNER-Thịt  -->



    <!-- --START-Thịt bò   -->
    <div class="section" id="series">
      <div class="container">
        <div class="section-header">
          <p class="booton-text">Thịt bò</p>
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel">
          <?php
          $sql = " select * from products where manufacturer_id=N'3' limit 10";
          $result = mysqli_query($connect, $sql);
          ?>
          <?php foreach ($result as $flashSale) : ?>

            <a href="product_detail.php?id=<?php echo $flashSale['id'] ?>" class="flash-item">
              <img class="flash-image" src="./admin/san_pham/photos/<?php echo $flashSale['photo'] ?>" alt="" />
              <div class="flash-item-content">
                <p class="flash-item-title">
                  <?php echo $flashSale['name'] ?>
                </p>
                <div class="flash-infos">
                  <div class="flash-info">
                    <i class="fa-solid fa-star"></i>
                    <span>4.5</span>
                  </div>

                  <div class="flash-info">
                    <span class="flash-info--price">
                      <?php echo number_format($flashSale['price']) ?>
                      đ</span>
                  </div>
                </div>
              </div>
            </a>
          <?php endforeach ?>

        </div>
      </div>
    </div>
    <!-- END-Thị bò  -->



    <!-- --START-BANNER-HẢI SẢN   -->

    <div class="section">
      <div class="container">
        <div class="banner">
          <img src="images/banner/banner-hai-san.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- --END-BANNER-HẢI SẢN   -->




    <!-- --START-HẢI SẢN   -->
    <div class="section" id="series">
      <div class="container">
        <div class="section-header">
          <p class="booton-text">hải sản</p>
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel">
          <?php
          $sql = " select * from products where manufacturer_id=N'1' limit 10";
          $result = mysqli_query($connect, $sql);
          ?>
          <?php foreach ($result as $flashSale) : ?>

            <a href="product_detail.php?id=<?php echo $flashSale['id'] ?>" class="flash-item">
              <img class="flash-image" src="./admin/san_pham/photos/<?php echo $flashSale['photo'] ?>" alt="" />
              <div class="flash-item-content">
                <p class="flash-item-title">
                  <?php echo $flashSale['name'] ?>
                </p>
                <div class="flash-infos">
                  <div class="flash-info">
                    <i class="fa-solid fa-star"></i>
                    <span>4.5</span>
                  </div>

                  <div class="flash-info">
                    <span class="flash-info--price">
                      <?php echo number_format($flashSale['price']) ?>
                      đ</span>
                  </div>
                </div>
              </div>
            </a>
          <?php endforeach ?>

        </div>
      </div>
    </div>
    <!-- END-Thị bò  -->


    <!-- --START-BANNER-HẢI SẢN   -->

    <div class="section">
      <div class="container">
        <div class="banner">
          <img src="images/banner/banner-thit-lon.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- --END-BANNER-HẢI SẢN   -->




    <!-- --START-THỊT HEO   -->
    <div class="section" id="series">
      <div class="container">
        <div class="section-header">
          <p class="booton-text">thịt heo</p>
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel">
          <?php
          $sql = " select * from products where manufacturer_id=N'7' limit 10";
          $result = mysqli_query($connect, $sql);
          ?>
          <?php foreach ($result as $flashSale) : ?>

            <a href="product_detail.php?id=<?php echo $flashSale['id'] ?>" class="flash-item">
              <img class="flash-image" src="./admin/san_pham/photos/<?php echo $flashSale['photo'] ?>" alt="" />
              <div class="flash-item-content">
                <p class="flash-item-title">
                  <?php echo $flashSale['name'] ?>
                </p>
                <div class="flash-infos">
                  <div class="flash-info">
                    <i class="fa-solid fa-star"></i>
                    <span>4.5</span>
                  </div>

                  <div class="flash-info">
                    <span class="flash-info--price">
                      <?php echo number_format($flashSale['price']) ?>
                      đ</span>
                  </div>
                </div>
              </div>
            </a>
          <?php endforeach ?>

        </div>
      </div>
    </div>
    <!-- END-THỊT HEO  -->


    <!-- -CONTACT- -->
    <div class="section">
      <div class="container">
        <div class="section-header">
          <p class="booton-text">Liên Hệ</p>
        </div>
        <div class="contact">
          <div class="contact-content">
            <h2 class="contact-title">Hãy cho tôi biết suy nghĩ của bạn !</h2>
            <!-- <span class="contact-des">
              Nếu bạn cần chúng tôi, thì chúng tôi cần bạn hơn. Đơn giản vì
              những lời góp ý của bạn đó là những thứ tạo nên những sản phẩm
              chất lượng và thận thiện hơn
            </span> -->


            <a href="./contact.php" class="contact-input--submit">Liên hệ ngay</a>



          </div>
        </div>
      </div>
      <!-- END-CONTACT  -->
      <!-- FOOTER SECTION -->
      <?php include 'footer.php' ?>
      <!-- END FOOTER SECTION -->
      <!-- --DAY-NIGHT-------- -->
      <div class="day-night">
        <input type="checkbox" class="checkbox" id="checkbox" />
        <label for="checkbox" class="label">
          <i class="fas fa-moon"></i>
          <i class="fas fa-sun"></i>
          <div class="ball"></div>
        </label>
      </div>
      <!-- --DAY-NIGHT-------- -->
      <!-- BACK TO TOP -->
      <a href="#" class="backtotop">
        <i class="fa-solid fa-angle-up"></i>
      </a>
      <!--END BACK TO TOP -->
    </div>

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->

    <script src="app.js"></script>
</body>

</html>