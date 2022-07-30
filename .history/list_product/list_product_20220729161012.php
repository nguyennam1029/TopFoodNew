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
                    <div class="tab-item is-active" data-tab="1">Thứ 2</div>
                    <div class="tab-item" data-tab="2">Thứ 3</div>
                    <div class="tab-item" data-tab="3">Thứ 4</div>
                    <div class="tab-item" data-tab="4">Thứ 5</div>
                    <div class="tab-item" data-tab="5">Thứ 6</div>

                  </div>
                </div>
                <!-- ----THỨ 2----- -->
                <div class="showtime-list show-active" data-tab="1">
                  <div class="row">

                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="./detail/dau_pha_tk.html" class="movie-item">
                        <img src="./images/cartoons/Dau-Pha-Thuong-Khung-OVA-3.webp" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Demon Slayer</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->

                  </div>
                </div>
                <!-- ----HẾT THỨ 2------ -->

                <!-- -----THỨ 3  -->
                <div class="showtime-list" data-tab="2">
                  <div class="row reverse">
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/Dau-Pha-Thuong-Khung-OVA-3.webp" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Demon Slayer</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/demon-slayer.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Demon Slayer</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/Du-Hiep-Chien-Ky.webp" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Du hiệp chiến kỳ</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/mandalorian.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">mandalorian</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/movies/bat-man.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Batman</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="./detail/hoa_giang_ho_bln.html" class="movie-item">
                        <img src="./images/cartoons/HGH-Bat-Luong-Nhan-5.webp" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">
                            Họa giang hồ bất lương nhân
                          </h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                  </div>
                  <div class="row showtime-mr">
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/Nguyen-Long-2.webp" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Nguyên Long 2</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/Son-Ha-Kiem-Tam.webp" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Sơn Hà Kiếm Tâm</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- ---- HẾT THỨ 3--- -->
                <!-- ----THỨ 4----- -->
                <div class="showtime-list" data-tab="3">
                  <div class="row">
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/start-trek.jpeg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Start trek</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/demon-slayer.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Demon Slayer</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/Tinh-Ha-Chi-Ton.webp" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Tinh hà chí tôn</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/mandalorian.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">mandalorian</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/movies/blood-shot.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Blood short</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="./detail/hoa_giang_ho_bln.html" class="movie-item">
                        <img src="./images/cartoons/HGH-Bat-Luong-Nhan-5.webp" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">
                            Họa giang hồ bất lương nhân
                          </h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                  </div>
                  <div class="row showtime-mr">
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/supergirl.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">supergirl</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/the-falcon.webp" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">The falcon</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- ----HẾT THỨ 4------ -->
                <!-- ----THỨ 5----- -->
                <div class="showtime-list" data-tab="3">
                  <div class="row reverse">
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/start-trek.jpeg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Start trek</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/your-name.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Yourn name</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/Tinh-Ha-Chi-Ton.webp" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Tinh hà chí tôn</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/mandalorian.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">mandalorian</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/penthouses.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Penthouses</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/the-falcon.webp" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">The falcon</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                  </div>
                </div>
                <!-- ----HẾT THỨ 5------ -->

                <!-- ----THỨ 6----- -->
                <div class="showtime-list" data-tab="4">
                  <div class="row">
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/start-trek.jpeg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Start trek</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/your-name.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Yourn name</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/Tinh-Ha-Chi-Ton.webp" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Tinh hà chí tôn</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/mandalorian.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">mandalorian</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/penthouses.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Penthouses</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->

                    <!-- ----end-item--- -->
                  </div>
                </div>
                <!-- ----HẾT THỨ 6------ -->

                <!-- ----THỨ 7----- -->
                <div class="showtime-list" data-tab="5">
                  <div class="row">
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/start-trek.jpeg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Start trek</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/movies/captain-marvel.png" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Captain</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/coco.jpg" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Coco</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/supergirl.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Supergirl</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/penthouses.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Penthouses</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->

                    <!-- ----end-item--- -->
                  </div>
                </div>
                <!-- ----HẾT THỨ 7------ -->

                <!-- ----cn----- -->
                <div class="showtime-list" data-tab="6">
                  <div class="row reverse">
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/the-falcon.webp" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">The falcon</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/movies/end-game.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">End game</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/cartoons/Thon-Phe-Tinh-Khong.webp" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Thôn phệ tinh không</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="./detail/vinh_sinh.html" class="movie-item">
                        <img src="./images/cartoons/Vinh-Sinh.webp" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Vĩnh sinh</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="#" class="movie-item">
                        <img src="./images/series/penthouses.jpg" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Penthouses</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                    <!-- ----item---- -->
                    <div class="col-2 col-md-4 col-sm-4">
                      <a href="./detail/tinh_than_bien.html" class="movie-item">
                        <img src="./images/cartoons/Tinh-Than-Bien-4.webp" alt="" />
                        <div class="movie-item-content">
                          <h4 class="movie-item-title">Tinh thần biến</h4>
                          <ul class="movie-infos">
                            <li class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.5</span>
                            </li>
                            <li class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>120 mins</span>
                            </li>
                            <li class="movie-info">
                              <span>HD</span>
                            </li>
                            <li class="movie-info">
                              <span>16+</span>
                            </li>
                          </ul>
                        </div>
                      </a>
                    </div>
                    <!-- ----end-item--- -->
                  </div>
                </div>
                <!-- ----HẾT THỨ 6------ -->
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
    <footer class="section footer-bg" data-aos="slide-up" data-aos-delay="100" data-aos-duration="700">
      <div class="container">
        <div class="row">
          <div class="col-4 col-md-6 col-sm-4">
            <div class="footer-content">
              <a href="#" class="logo">
                <i class="bx bx-movie-play bx-tada main-color"></i>Mov<span class="main-color">i</span>e - Plat<span class="main-color">F</span>orm
              </a>
              <p></p>
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
            <div class="row">
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
                        <img src="../images/google-play.png" alt="" />
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="../images/app-store.png" alt="" />
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
      <i class="bx bx-chevron-up"></i>
    </a>
    <!--END BACK TO TOP -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="movieGenre.js"></script>
  </div>
</body>

</html>