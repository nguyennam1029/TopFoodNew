<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng nhập</title>
  <!-- BOX ICONS -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="app.css" />
</head>

<body>

  <div class="modal">

    <?php if (isset($_SESSION['name'])) { ?>
      <div class="noti">
        <div class="noti-content">
          <i class='bx bxs-bell-ring'></i>
          <span class="noti-title">Chúc mừng <?php echo $_SESSION['name'];
                                              unset($_SESSION['name']);


                                              ?> bạn đã đăng kí thành công</span>
          <i class='bx bxs-bell-ring' style="margin-left: 6px; margin-right: 0;"></i>

        </div>
      </div>
    <?php } ?>

    <?php if (isset($_GET['error'])) { ?>
      <div class="noti">
        <div class="noti-content">
          <i class='bx bx-error-alt'></i>
          <span class="noti-title">Bạn vui lòng: xem lại email hoặc mật khẩu</span>
          <i class='bx bx-error-alt' style="margin-left: 6px; margin-right: 0;"></i>

        </div>
      </div>
    <?php } ?>
    <div class="modal-overlay" style="
    background: url('./images/banner/banner3.jpg') top center / cover no-repeat !important;
    
    "></div>
    <div class="modal-content">
      <a href="index.php" class="modal-close">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </a>
      <div class="modal-main">
        <form method="post" action="./process/process_signin.php" class="form-field" autocomplete="off">
          <img src="./images/Vector.png" alt="" class="form-field--background" />
          <h1 class="form-heading">Đăng Nhập</h1>
          <div style="padding: 15px 30px">
            <div class="form-login--name">
              <input type="email" class="form-input" name="email" placeholder=" " autocomplete='off' value="" />
              <label for="" class="form-label">Email</label>
            </div>
            <div class="form-login--pass">
              <input type="password" name="password" class="form-input" autocomplete='off' placeholder=" " />
              <label for="" class="form-label">Password</label>
            </div>

            <div class="form-forgot">
              <a href="#" class="form-login--link">Quên mật khẩu ?</a>
            </div>

            <div class="form-btn">
              <button class="formt-btn--shared formt-btn--login">
                Đăng Nhập
              </button>
            </div>

            <div class="create-account">
              <span class="create-account--text">Chưa có tài khoản ?
                <a href="sign_up.php" target="_self" class="create-account--link">Tạo tài khoản</a>
              </span>
            </div>
            <div class="sign-with">
              <p class="sign-with--line">---Hoặc---</p>
              <p class="sign-with--text">Đăng ký qua</p>
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