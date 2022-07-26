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
  <link rel="stylesheet" href="cart.css" />

</head>

<body>
  <div class="app">
    <?php include 'menu.php'
    ?>
    <!-- END-MENU  -->

    <!-- START-CART  -->
    <div class="cart-wrapper">

      <div class="container">
        <div class="section-header" style="margin-top: 40px;">
          <p class="booton-text">Giỏ hàng</p>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="cart-item">
              <div class="cart-left">
                <div class="cart-left--img">
                  <img src="images/product/sashime/sashimi3.jpg" alt="">
                </div>
                <div class="cart-left--info">
                  <div class="cart-left-info--top">
                    <h5 class="cart-left--name">Thịt sường hun khói</h5>
                    <span class="cart-left--price">189.000<sup>đ</sup></span>

                  </div>
                  <div class="cart-left-info--bottom">

                    <a href="#" class="cart-left--link">-</a>
                    <span class="cart-left--link cart-left--quantity">1</span>
                    <a href="#" class="cart-left--link">+</a>
                  </div>
                </div>
              </div>
              <div class="cart-right">
                <p class="cart-right--total">189.000<sup>đ</sup></p>
                <div class="cart-right--btn">
                  <div class="cart-right--delete">
                    <i class='bx bx-trash'></i>
                    <span>Xóa</span>
                  </div>
                  <div class="cart-right--save">
                    <i class='bx bx-heart'></i>
                    <span>Lưu</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END-CART  -->


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