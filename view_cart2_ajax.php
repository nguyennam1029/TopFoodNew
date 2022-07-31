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
      $cart = $_SESSION['cart'];
      $total = 0;

      ?>
      <div class="container container-width">
        <div class="section-header" style="margin-top: 40px;">
          <p class="booton-text">Giỏ hàng</p>
        </div>
        <div class="row">
          <?php (empty($cart)) ?: '' ?>

          <div class="cart-total-price" style="text-align: right;
                                                margin-top: 40px;
                                                font-size : 16px;
                                                width: 100%;
                                                padding-right: 15px;">
            <p class="cart-total-price--title">Tổng tiền: <span id="total-cart" style="font-size:18px ;"><?php echo number_format($total) ?> đ</span></p>
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
  <!-- APP SCRIPT -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".btn-update-quantity").click(function() {
        const btn = $(this);
        let id = btn.data('id');
        let type = btn.data('type');
        $.ajax({
          type: "GET",
          url: "update_cart.php",
          data: {
            id,
            type
          },

          success: function(response) {
            let parent = btn.parents('.cart-right');
            let price = parent.find('.cart-right-top--price').text();
            let quantity = parent.find('.cart-right--quantity').text();
            quantity++;
            parent.find('.cart-right--quantity').text(quantity);
            let sum = parseFloat(price.replace('.', '')) * parseFloat(quantity);
            parent.find('.cart-right-top--total').text(parseFloat(sum));

            //TÍNH TỔNG
            let total = 0;
            $('.cart-right-top--total').each(function() {
              total += parseFloat($(this).text())
            });
            $('#total-cart').text(total)
          }
        });
      })
    })
  </script>
</body>

</html>