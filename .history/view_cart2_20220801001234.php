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
  <link rel="stylesheet" href="./plugin/fontawesome-free-6.1.2-web/css/all.min.css">

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
      <?php
      if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
        $sum = 0;
      }

      ?>
      <?php if (!isset($_SESSION['cart'])) { ?>
        <div class="noti">
          <div class="noti-content">
            <i class='bx bxs-bell-ring'></i>
            <span class="noti-title">Giỏ hàng trống</span>
            <i class='bx bxs-bell-ring' style="margin-left: 6px; margin-right: 0;"></i>
            <?php unset($_SESSION['cart']); ?>

          </div>
        </div>
        <div class="noti-no-cart">
          <img src="https://bizweb.dktcdn.net/100/360/810/themes/732049/assets/empty-cart.png?1621342550029" alt="">
        </div>
      <?php } else { ?>
        <div class="container container-width">
          <div class="section-header" style="margin-top: 40px;">
            <p class="booton-text">Giỏ hàng</p>
          </div>
          <div class="row">
            <?php foreach ($cart as $id => $cart_item) : ?>
              <!-- -START-ITEM  -->
              <div class="col-12">
                <div class="cart-item">
                  <div class="cart-left">
                    <img src="admin/san_pham/photos/<?php echo $cart_item['photo'] ?>" alt="">
                  </div>
                  <div class="cart-right">
                    <div class="cart-right-top">
                      <div class="cart-right-top--info">
                        <h5 class="cart-right-top--name"><?php echo $cart_item['name'] ?></h5>
                        <span class="cart-right-top--price"><?php echo number_format($cart_item['price']) ?><sup>đ</sup></span>
                      </div>
                      <span class="cart-right-top--total"><?php
                                                          $result = $cart_item['price'] * $cart_item['quantity'];
                                                          echo number_format($result);
                                                          $sum += $result;
                                                          ?> đ</span>
                    </div>
                    <div class="cart-right-bottom">
                      <div class="cart-right-bottom--quantity">
                        <a href="update_cart.php?id=<?php echo $id ?>&type=decre" class=" cart-right--link">-</a>
                        <span class="cart-right--link cart-right--quantity"><?php echo $cart_item['quantity'] ?></span>
                        <a href="update_cart.php?id=<?php echo $id ?>&type=incre" class="cart-right--link">+</a>
                      </div>
                      <div class="cart-right-bottom--btn">

                        <a href="#" class="cart-right-bottom--save">
                          <i class='bx bx-heart'></i>
                          <span>Lưu</span>
                        </a>
                        <a href="delete_cart_item.php?id=<?php echo $id ?>" class="cart-right-bottom--delete">
                          <i class='bx bx-trash'></i>
                          <span>Xóa</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <span class="cart-item--line"></span>

              </div>
              <!-- END-ITEM  -->

            <?php endforeach ?>

            <div class="cart-total-price" style="text-align: right;
    margin-top: 40px;
    font-size : 16px;
    width: 100%;
    padding-right: 15px;">
              <p class="cart-total-price--title">Tổng tiền: <span style="font-size:18px ;"><?php echo number_format($sum) ?> đ</span></span></p>
            </div>
          </div>
        </div>
      <?php }

      ?>


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
  <!-- APP SCRIPT -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="app.js"></script>
</body>

</html>