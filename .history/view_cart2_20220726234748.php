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
      <?php
      $cart = $_SESSION['cart'];
      $sum = 0;

      ?>
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
                                                        ?></span>
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
              <p class="cart-total-price">
                <?php echo $sum ?>
              </p>
            </div>
            <!-- END-ITEM  -->
          <?php endforeach ?>
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