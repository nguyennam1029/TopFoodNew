<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hài Hước</title>
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
  <link rel="stylesheet" href="../grid.css" />
  <link rel="stylesheet" href="../app.css" />
  <link rel="stylesheet" href="./movieGenre.css" />
</head>

<body>
  <div class="app">
    <!-- NAV -->
    <?php include '../menu.php'
    ?>
    <!-- END NAV -->
    <div class="container">
      <div class="row">
        <div class="col-9 col-md-8 col-sm-12">
          <div class="content-left">
            <!-- <h2 class="left-heading">Phim hài hước</h2> -->
            <!-- TABs MOVIE SECTION -->
            <div class="section">
              <div class="container">
                <div class="section-header">
                  <h2 class="booton-text">Lịch chiếu</h2>
                </div>

                <div class="showtime">
                  <div class="tab-list">
                    <div class="tab-item is-active" data-tab="all">All</div>
                    <div class="tab-item" data-tab="Thịt">Thịt</div>
                    <div class="tab-item" data-tab="Shasimi">Shasimi</div>
                    <div class="tab-item" data-tab="Hải sản">Hải sản</div>
                    <div class="tab-item" data-tab="Cá tươi">Cá tươi</div>

                  </div>
                </div>
                <!-- ----THỨ 2----- -->
                <div class="showtime-list show-active">
                  <div class="row">
                    <?php
                    require '../admin/connect.php';
                    $sql = " select * from products,manufacturers where products.manufacturer_id=manufacturers.id";
                    $result = mysqli_query($connect, $sql);
                    ?>

                    <!-- ----item---- -->
                    <?php foreach ($result as $row) : ?>
                      <div class="tab-item--product col-3 col-md-4 col-sm-4" data-item="<?php echo $row["namensx"] ?>">
                        <a href="../product_detail.php?id=<?php echo $row["id"] ?>" class="product-item">
                          <img src="../admin/san_pham/photos/<?php echo $row['photo'] ?>" alt="" />
                          <div class="product-item-content">
                            <h4 class="product-item-title"><?php echo $row["name"] ?></h4>
                            <ul class="product-infos">
                              <li class="product-info">
                                4.5
                                <i class="bx bxs-star"></i>

                              </li>
                              <li class="product-info">

                                <span><?php echo $row["price"] ?></span>
                              </li>

                            </ul>
                          </div>
                        </a>
                      </div>
                    <?php endforeach ?>

                    <!-- ----end-item--- -->

                  </div>
                </div>
                <!-- ----HẾT THỨ 2------ -->

              </div>
            </div>
            <!-- END TABs MOVIE SECTION -->
            <!-- ---------Phân trang----------- -->
            <div class="row">
              <div class="col-12 col-md-12 col-sm-12">
                <ul class="page-list">
                  <li class="page-item active">1</li>
                  <li class="page-item">2</li>
                  <li class="page-item">3</li>
                  <li class="page-item">...</li>
                  <li class="page-item">9</li>
                  <li class="page-item">10</li>
                  <i class="page-item fa-solid fa-angle-right"></i>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- ---------START--Right-top-movie-------- -->
        <div class="col-3 col-md-4 col-sm-12">
          <div class="see-more">
            <div class="list-item">
              <h3 class="play-movie--heading">Xem Nhiều</h3>
              <a href="#" class="play-movie--link">
                <img src="../images/series/stranger-thing.jpg" alt="" class="play-movie--img" />
                <p class="play-movie--name">stranger thing</p>
              </a>
              <!-- ---item---  -->
              <a href="#" class="play-movie--link">
                <img src="../images/movies/theatre-dead.jpg" alt="" class="play-movie--img" />
                <p class="play-movie--name">Theatre of the dead</p>
              </a>

              <!-- ---item---  -->
              <a href="#" class="play-movie--link">
                <img src="../images/movies/transformer.jpg" alt="" class="play-movie--img" />
                <p class="play-movie--name">Transformer</p>
              </a>
              <!-- ---item---  -->
              <a href="#" class="play-movie--link">
                <img src="../images/movies/resident-evil.jpg" alt="" class="play-movie--img" />
                <p class="play-movie--name">Resident Evil</p>
              </a>
              <a href="../detail/dau_pha_tk.html" class="play-movie--link">
                <img src="../images/cartoons/Dau-Pha-Thuong-Khung-OVA-3.webp" alt="" class="play-movie--img" />
                <p class="play-movie--name">Đấu phá thương khung</p>
              </a>
              <!-- ---item---  -->
              <a href="#" class="play-movie--link">
                <img src="../images/movies/theatre-dead.jpg" alt="" class="play-movie--img" />
                <p class="play-movie--name">Theatre of the dead</p>
              </a>
              <a href="#" class="play-movie--link">
                <img src="../images/series/stranger-thing.jpg" alt="" class="play-movie--img" />
                <p class="play-movie--name">stranger thing</p>
              </a>
              <!-- ---item---  -->
              <a href="#" class="play-movie--link">
                <img src="../images/movies/theatre-dead.jpg" alt="" class="play-movie--img" />
                <p class="play-movie--name">Theatre of the dead</p>
              </a>

              <!-- ---item---  -->
              <a href="../detail/hoa_giang_ho_bln.html" class="play-movie--link">
                <img src="../images/cartoons/HGH-Bat-Luong-Nhan-5.webp" alt="" class="play-movie--img" />
                <p class="play-movie--name">
                  Họa giang hồ chi bất lương nhân - Chi bất lực 2022
                </p>
              </a>
              <!-- ---item---  -->
              <a href="#" class="play-movie--link">
                <img src="../images/movies/transformer.jpg" alt="" class="play-movie--img" />
                <p class="play-movie--name">Transformer</p>
              </a>
            </div>
          </div>
        </div>
        <!-- ---------END--Right-top-movie-------- -->
      </div>


    </div>

    <!-- FOOTER SECTION -->
    <?php
    require '../footer.php';
    ?>
    <!-- END FOOTER SECTION -->
    <!-- BACK TO TOP -->
    <a href="#" class="backtotop">
      <i class="bx bx-chevron-up"></i>
    </a>
    <!--END BACK TO TOP -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="product.js"></script>
  </div>
</body>

</html>