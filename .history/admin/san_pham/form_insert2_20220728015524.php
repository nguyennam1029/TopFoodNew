<?php
require '../check_admin_login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="../../app.css" />

</head>

<body>
     <?php require '../menu.php';
     require '../connect.php';
     $sql = "select * from manufacturers ";
     $result = mysqli_query($connect, $sql);

     ?>

     <div class="modal">
          <div class="modal-overlay" style="
         background-image: #FEDCC5;
        "></div>
          <div class="modal-content">
               <a href="../index.php" class="modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
               </a>
               <div class="modal-main">
                    <form class="form-field" action="process_login.php" method="post">
                         <img src="../images/Vector.png" alt="" class="form-field--background" style="filter: brightness(40%)" />
                         <h1 class="form-heading">Đăng Nhập</h1>
                         <div style="padding: 15px 30px">
                              <div class="form-login--name">
                                   <input type="text" class="form-input" placeholder=" " />
                                   <label for="" class="form-label">FullName</label>
                              </div>
                              <div class="form-login--pass">
                                   <input type="password" class="form-input" placeholder=" " />
                                   <label for="" class="form-label">Password</label>
                              </div>

                              <div class="form-forgot">
                                   <a href="#" class="form-login--link">Quên mật khẩu ?</a>
                              </div>
                              <div class="form-checkmark">
                                   <input type="checkbox" class="form-checkmark--input" />
                                   <label for="" class="form-checkmark--text">Nhớ mật khẩu</label>
                              </div>

                              <div class="form-btn">
                                   <button class="formt-btn--shared formt-btn--login">
                                        Đăng Nhập
                                   </button>
                              </div>
                         </div>

                         <img src="../images/DownWave.png" alt="" class="form-field--background" style="filter: brightness(46%)" />
                    </form>
               </div>
          </div>
     </div>


</body>

</html>