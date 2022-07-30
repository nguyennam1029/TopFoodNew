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
                    require './admin/connect.php';
                    $sql = " select * from products,manufacturers where products.manufacturer_id=manufacturers.id";
                    $result = mysqli_query($connect, $sql);
                    ?>
                    <span><?php echo $result ?></span>
                    <!-- ----item---- -->
                    <?php foreach ($result as $row) : ?>
                      <div class="tab-item--product col-3 col-md-4 col-sm-4" data-item="<?php echo $row["namensx"] ?>">
                        <a href="./product_detail.php?id=<?php echo $row["id"] ?>" class="product-item">
                          <img src="./admin/san_pham/photos/<?php echo $row['photo'] ?>" alt="" />
                          <div class="product-item-content">
                            <h4 class="product-item-title"><?php echo $row["name"] ?></h4>
                            <ul class="product-infos">
                              <li class="product-info">
                                4.5
                                <i class="bx bxs-star"></i>

                              </li>
                              <li class="product-info">

                                <span><?php echo number_format($row["price"]) ?> đ</span>
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
              <?php

              require './admin/connect.php';
              $sql = " select * from products where manufacturer_id=N'1' limit 10";
              $result = mysqli_query($connect, $sql);

              ?>
              <!-- ---START-ITEM---  -->
              <?php foreach ($result as $seemore) : ?>
                <a href="./product_detail.php?id=<?php echo $seemore['id'] ?>" class="play-movie--link">
                  <img src="./admin/san_pham/photos/<?php echo $seemore['photo'] ?>" alt="" class="play-movie--img">
                  <div class="recoment-product">
                    <p class="play-movie--name"><?php echo $seemore['name'] ?></p>
                    <ul class="rating-list recoment">
                      <li class="rating-item"><i class="rating-item--icon fa-solid fa-star"></i></li>
                      <li class="rating-item"><i class="rating-item--icon fa-solid fa-star"></i></li>
                      <li class="rating-item"><i class="rating-item--icon fa-solid fa-star"></i></li>
                      <li class="rating-item"><i class="rating-item--icon fa-solid fa-star"></i></li>
                      <li class="rating-item"><i class="fa-solid fa-star"></i></li>

                    </ul>
                    <span><?php echo number_format($seemore['price']) ?> đ</span>
                  </div>
                </a>
              <?php endforeach ?>
              <!-- ---END-ITEM  -->
            </div>
          </div>
        </div>
        <!-- ---------END--Right-top-movie-------- -->
      </div>


    </div>

    <!-- FOOTER SECTION -->
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