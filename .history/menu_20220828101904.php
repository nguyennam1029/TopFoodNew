<!-- NAV -->
<?php
$page = "contact.php";
?>
<div class="nav-wrapper">
    <div class="container">
        <div class="nav">
            <a href="#" class="logo">
                <img src="https://topfood.id/wp-content/uploads/2020/05/logo-topfood.png" alt="" />
            </a>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="./index.php" class="nav-link active">Trang Chủ</a></li>


                <li class="nav-item--type">
                    <a href="list_product.php" class="nav-link">
                        <span class="nav-link--type-titel">Sản Phẩm</span>
                    </a>
                </li>


                <li>
                    <a href="./contact.php" class="nav-link <?php echo ($page == "contact.php" ? "active" : "") ?>">
                        Liên Hệ
                    </a>
                </li>

                <?php if (empty($_SESSION['id'])) { ?>
                    <li class="nav-menu--active">
                        <a href="sign_in.php" class="custom-btn btn-11 hover-active">
                            <span>Đăng Nhập</span>
                        </a>
                    </li>
                    <li class="nav-menu--active custom-btn-sigup">
                        <a href="sign_up.php" class="custom-btn btn-11 hover-active btn-sigup">
                            <span>Đăng Ký</span>
                        </a>
                    </li>
                <?php   } else { ?>

                    <li>
                        <a class="avatarlink " href="./info_user.php">
                            <div class="avatarlink-list" style="
                            display        : flex;
                            justify-content: center;
                            align-items    : center;">
                                <div class="avatarlink-item" style="height      : 40px;
                                                                    margin-right: 4px;
                                                                    overflow    : hidden;
                                                                    width       : 40px;">
                                    <img class="avatarlink-item--img" src="images/user_img/user.jpg" alt="" style="
                                    border-radius: 50%;
                                    display      : inline-block;
                                    height       : 100%;
                                    object-fit   : cover;
                                    width        : 100%;">
                                </div>
                                <span class="avatarlink-item--name nav-link"><?php echo $_SESSION['name'] ?></span>
                            </div>
                        </a>
                    </li>
                    <li><a href="./sign_out.php" class="nav-link">Đăng xuất</a></li>

                    <li>
                        <a href="view_cart2.php" class="nav-link nav-link--cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="nav-link--cart--noti"></span>
                        </a>
                    </li>

                <?php } ?>

            </ul>
            <!-- MOBILE MENU TOGGLE -->
            <div class="hamburger-menu" id="hamburger-menu">
                <div class="hamburger"></div>
            </div>
        </div>
    </div>
</div>
<!-- END NAV -->