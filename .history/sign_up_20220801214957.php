<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng kí</title>
  <link rel="stylesheet" href="app.css" />
</head>

<body>
  <div class="modal">
    <?php if (isset($_SESSION['error'])) {
      echo $_SESSION['error'];
      unset($_SESSION['error']);
    } ?>
    <div class="modal-overlay active" style="
    background: url('./images/banner/banner3.jpg') top center / cover no-repeat !important;
    
    "></div>
    <div class="modal-content">
      <a href="index.php" class="modal-close">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </a>
      <div class="modal-main">
        <?php
        if (isset($_GET['error'])) {
          echo $_GET['error'];
        }
        ?>
        <form method="post" action="process_signup.php" class="form-field" autocomplete="off">
          <img src="./images/Vector.png" alt="" class="form-field--background" />
          <h1 class="form-heading">Đăng Ký</h1>
          <div style="padding: 0 30px">
            <div class="form-login--name">
              <input type="text" class="form-input" placeholder=" " name="name" />
              <label for="" class="form-label">Full Name</label>
            </div>

            <div class="form-login--name">
              <input type="email" class="form-input" placeholder=" " name="email" />
              <label for="" class="form-label">Email</label>
            </div>
            <div class="form-signup">
              <div class="form-login--name form-signup--mr">
                <input type="password" class="form-input" placeholder=" " name="password" />
                <label for="" class="form-label">Password</label>
              </div>
              <div class="form-login--name">
                <input type="text" class="form-input" placeholder=" " name="phone" />
                <label for="" class="form-label">Phone</label>
              </div>

            </div>
            <div class="form-login--name">
              <input type="text" class="form-input" placeholder=" " name="address" />
              <label for="" class="form-label">Address</label>
            </div>
            <div class="form-rules">
              <input type="checkbox" class="form-checkmark--input" />
              <p class="form-checkmark--text form-rules--text">
                Tôi đông ý với điều khoản của TopFood
              </p>
            </div>

            <div class="form-btn">
              <button type="submit" class="formt-btn--shared formt-btn--login">Gửi </button>
            </div>

            <div class="create-account">
              <span class="create-account--text">
                Nếu bạn đã có tài khoản !
                <a href="sign_in.php" target="_selfe" class="create-account--link">Login</a>
              </span>
            </div>
            <div class="sign-with">
              <p class="sign-with--text">Đăng kí bằng</p>
              <div class="sign-with--list">
                <a href="#" class="sign-with--link">
                  <img class="sign-with--icon" src="./images/Googel.png" alt="" />
                </a>
                <a href="#" class="sign-with--link">
                  <img class="sign-with--icon" src="./images/Insta.png" alt="" />
                </a>
                <a href="#" class="sign-with--link">
                  <img class="sign-with--icon" src="./images/Twitter.png" alt="" />
                </a>
              </div>
            </div>
          </div>

          <img src="./images/DownWave.png" alt="" class="form-field--background" />
        </form>
      </div>
    </div>
  </div>
</body>

</html>