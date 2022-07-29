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
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
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


    <!-- HERO SECTION -->
    <div class="hero-section">
      <!-- HERO SLIDE -->
      <div class="hero-slide">
        <div class="owl-carousel carousel-nav-center" id="hero-carousel">
          <!-- SLIDE ITEM -->
          <div class="hero-slide-item">
            <img src="./images/banner/banner1.jpg" alt="" />
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
              <div class="item-content-wraper">
                <div class="item-content-title top-down">
                  <p class="item-content-title--color">Cách sắp xếp bàn ăn</p>
                </div>
                <div class="flash-infos top-down delay-2"></div>
                <div class="item-content-description top-down delay-4">
                  Đĩa đựng món ăn chính sẽ đặt ngay chính giữa vị trí ngồi của
                  thực khách, đĩa salad được đặt bên trên đĩa món ăn chính và
                  đĩa bánh mì sẽ nằm ở góc trên bên trái. Khăn ăn bạn phải gấp
                  gọn gàng và đặt bên trái hoặc phía trên đĩa món ăn chính.
                  Các dụng cụ nằm bên phải đĩa món ăn chính sẽ là dao ăn, thìa
                  ăn và thìa súp
                </div>
                <div class="item-action top-down delay-6">
                  <a href="./detail/eveng.html" class="custom-btn block btn-11">
                    <i class="bx bxs-right-arrow"></i>
                    <span>Xem Ngay</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- END SLIDE ITEM -->
          <!-- SLIDE ITEM -->
          <div class="hero-slide-item">
            <img src="./images/banner/banner2.jpg" alt="" />
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
              <div class="item-content-wraper">
                <div class="item-content-title top-down">
                  <p class="item-content-title--color">Món gỏi</p>
                </div>
                <div class="flash-infos top-down delay-2"></div>
                <div class="item-content-description top-down delay-4">
                  Chỉ bằng vài bước vào bếp vừa đơn giản lại vừa nhanh chóng,
                  bạn đã có thể chiêu đãi cho cả nhà bữa ăn dinh dưỡng, hấp
                  dẫn với món gỏi bồn bồn thơm ngon này rồi. Dĩa gỏi thơm lừng
                  kích thích vị giác vô cùng, bồn bồn giòn giòn, tươi ngon,
                  ngấm đều vị nước trộn chua chua ngọt ngọt, ăn cùng với miếng
                  bánh phồng tôm nữa là hết sẩy.
                </div>
                <div class="item-action top-down delay-6">
                  <a href="./detail/avatar.html" class="custom-btn block btn-11">
                    <i class="bx bxs-right-arrow"></i>
                    <span>Xem Ngay</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- END SLIDE ITEM -->

          <!-- SLIDE ITEM -->
          <div class="hero-slide-item">
            <img src="./images/banner/banner3.jpg" alt="" />
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
              <div class="item-content-wraper">
                <div class="item-content-title top-down">
                  <div class="item-content-title--color">
                    Cách chọn rau, củ, quả
                  </div>
                </div>
                <div class="flash-infos top-down delay-2"></div>
                <div class="item-content-description top-down delay-4">
                  Rau củ và quả tươi có màu sắc tự nhiên, không bị héo úa.
                  Không có bất kì màu sắc bất thường nào. Bạn nên chú ý các
                  loại củ quả màu xanh hoặc có màu sắc khá thất thường
                </div>
                <div class="item-action top-down delay-6">
                  <a href="./detail/WandaVision.html" class="custom-btn block btn-11">
                    <i class="bx bxs-right-arrow"></i>
                    <span>Xem Ngay</span>
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
                    <span>Xem Ngay</span>
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

            <img style="filter: brightness;" class="flash-sale--logo" src="images/flashsale.svg" alt="" />
          </p>
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel">
          <?php

          require 'admin/connect.php';
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
                    <i class="bx bxs-star"></i>
                    <span>4.5</span>
                  </div>

                  <div class="flash-info">
                    <span class="flash-info--price">
                      <?php echo $flashSale['price'] ?>
                      đ</span>
                  </div>
                </div>
              </div>
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
          <img src="https://gofood.vn/upload/r/slider/slide-gofood/banner-chuyen-muc/banner-hai-san.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- --END-BANNER-HẢI SẢN  -->

    <!-- --START-HẢI SẢN  -->
    <div class="section" id="series">
      <div class="container">
        <div class="section-header">
          <p class="booton-text">Hải sản</p>
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel">
          <!-- MOVIE ITEM -->
          <a href="#" class="flash-item">
            <img class="flash-image" src="https://gofood.vn/upload/r/san-pham/Hai-san-nhat-ban/trung-ca-hoi-nhat-20g-0.jpg" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">Bò xào chua</p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
          <!-- MOVIE ITEM -->
          <a href="./detail/tinh_hai_kysi.html" class="flash-item">
            <img src="https://gofood.vn/upload/r/san-pham/Hai-san-nhat-ban/thanh-cua-0a.jpg" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">Tinh Hài kỵ Sĩ</p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
          <!-- MOVIE ITEM -->
          <a href="#" class="flash-item">
            <img class="flash-image" src="https://gofood.vn/upload/r/san-pham/Hai-san-nhat-ban/ca-cam-0.jpg" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">Star Trek</p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
          <!-- MOVIE ITEM -->
          <a href="./detail/liet_duong.html" class="flash-item">
            <img class="flash-image" src="https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/VNITE20220511044059036413/detail/b0f99c95_a7b583df339.webp" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">Liệt Dương Thiên Đạo</p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
          <!-- MOVIE ITEM -->
          <a href="./detail/tamgiac.html" class="flash-item">
            <img class="flash-image" src="https://gofood.vn/upload/r/san-pham/Hai-san-nhat-ban/so-do-0.jpg" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">Thịt ba chỉ bò Mỹ</p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
          <!-- MOVIE ITEM -->
          <a href="#" class="flash-item">
            <img class="flash-image" src="https://gofood.vn/upload/r/san-pham/Ca-hoi-Nauy/fillet/ca-hoi-nauy-fillet-0.jpg" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">
                The Falcon And The Winter Soldier
              </p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
          <!-- MOVIE ITEM -->
          <a href="#" class="flash-item">
            <img class="flash-image" src="https://gofood.vn/upload/r/san-pham/gia-vi-Y-tay-ban-nha/gan-ngong/gan-ngong-thai-mieng-0.jpg" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">Gan ngỗng Pháp</p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
        </div>
      </div>
    </div>
    <!-- END-HẢI SẢN  -->

    <!-- --START-BANNER-HẢI SẢN  -->
    <div class="section">
      <div class="container">
        <div class="banner">
          <img src="images/banner/banner-sashimi.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- --END-BANNER-HẢI SẢN  -->

    <!-- --START-HẢI SẢN  -->
    <div class="section" id="series">
      <div class="container">
        <div class="section-header">
          <p class="booton-text">Sashimi</p>
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel">
          <!-- MOVIE ITEM -->
          <a href="#" class="flash-item">
            <img class="flash-image" src="https://gofood.vn/upload/r/san-pham/Hai-san-nhat-ban/trung-ca-hoi-nhat-20g-0.jpg" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">Bò xào chua</p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
          <!-- MOVIE ITEM -->
          <a href="./detail/tinh_hai_kysi.html" class="flash-item">
            <img src="https://gofood.vn/upload/r/san-pham/Hai-san-nhat-ban/thanh-cua-0a.jpg" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">Tinh Hài kỵ Sĩ</p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
          <!-- MOVIE ITEM -->
          <a href="#" class="flash-item">
            <img class="flash-image" src="https://gofood.vn/upload/r/san-pham/Hai-san-nhat-ban/ca-cam-0.jpg" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">Star Trek</p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
          <!-- MOVIE ITEM -->
          <a href="./detail/liet_duong.html" class="flash-item">
            <img class="flash-image" src="https://d1sag4ddilekf6.azureedge.net/compressed_webp/items/VNITE20220511044059036413/detail/b0f99c95_a7b583df339.webp" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">Liệt Dương Thiên Đạo</p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
          <!-- MOVIE ITEM -->
          <a href="./detail/tamgiac.html" class="flash-item">
            <img class="flash-image" src="https://gofood.vn/upload/r/san-pham/Hai-san-nhat-ban/so-do-0.jpg" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">Thịt ba chỉ bò Mỹ</p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
          <!-- MOVIE ITEM -->
          <a href="#" class="flash-item">
            <img class="flash-image" src="https://gofood.vn/upload/r/san-pham/Ca-hoi-Nauy/fillet/ca-hoi-nauy-fillet-0.jpg" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">
                The Falcon And The Winter Soldier
              </p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
          <!-- MOVIE ITEM -->
          <a href="#" class="flash-item">
            <img class="flash-image" src="https://gofood.vn/upload/r/san-pham/gia-vi-Y-tay-ban-nha/gan-ngong/gan-ngong-thai-mieng-0.jpg" alt="" />
            <div class="flash-item-content">
              <p class="flash-item-title">Gan ngỗng Pháp</p>
              <div class="flash-infos">
                <div class="flash-info">
                  <i class="bx bxs-star"></i>
                  <span>4.5</span>
                </div>

                <div class="flash-info">
                  <span class="flash-info--price">199.000 đ</span>
                </div>
              </div>
            </div>
          </a>
          <!-- END MOVIE ITEM -->
        </div>
      </div>
    </div>
    <!-- END-HẢI SẢN  -->

    <!-- -CONTACT- -->
    <div class="section">
      <div class="container">
        <div class="contact">
          <div class="contact-content">
            <h2 class="contact-title">Hãy cho tôi biết suy nghĩ của bạn !</h2>
            <span class="contact-des">
              Nếu bạn cần chúng tôi, thì chúng tôi cần bạn hơn. Đơn giản vì
              những lời góp ý của bạn đó là những thứ tạo nên những sản phẩm
              chất lượng và thận thiện hơn
            </span>
            <div class="contact-input">
              <input type="text" placeholder="Điền vào đây..." />
              <a href="#" class="contact-input--submit">Gửi</a>
            </div>
          </div>
          <img class="contact-img--left" src="images/banner/contact2.png" alt="" />
          <img class="contact-img--right" src="images/banner/contact1.png" alt="" />
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
      <i class="bx bx-chevron-up"></i>
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