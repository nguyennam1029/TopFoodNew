<!-- NAV -->
<div class="nav-wrapper">
    <div class="container">
        <div class="nav">
            <a href="#" class="logo">
                <img src="https://topfood.id/wp-content/uploads/2020/05/logo-topfood.png" alt="" />
            </a>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="./index.php" class="nav-link active">Trang chủ</a></li>

                <li><a href="./blog.php" class="nav-link">Blog</a></li>

                <li class="nav-item--type">
                    <a class="nav-link nav-link--type">
                        <span class="nav-link--type-titel">Thể Loại</span>
                        <!-- <i class="nav-link-icon fa fa-caret-down dropdown__caret"></i> -->
                        <i class="nav-link-icon fa fa-caret-down"></i>
                    </a>
                    <ul class="type-list">
                        <li class="type-item">
                            <a href="./movieGenre/actionMovie.html" class="type-item--link">Phim Hành Động</a>
                        </li>
                        <li class="type-item">
                            <a href="./movieGenre/humorousMovie.html" class="type-item--link">Phim Hài Hước</a>
                        </li>
                        <li class="type-item">
                            <a href="./movieGenre/FictionMovie.html" class="type-item--link">Phim Viễn Tưởng</a>
                        </li>
                        <li class="type-item">
                            <a href="./movieGenre/detectiveMovie.html" class="type-item--link">Phim Trinh Thám</a>
                        </li>
                        <li class="type-item">
                            <a href="./movieGenre/adventureMovie.html" class="type-item--link">Phim Phiêu Lưu</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="./contact/contact.html" class="nav-link">Liên Hệ</a>
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
                        <a class="nav-link avatarlink">
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
                                <span class="avatarlink-item--name"><?php echo $_SESSION['name'] ?></span>
                            </div>
                        </a>
                    </li>


                <?php } ?>
                <li><a href="./blog.php" class="nav-link"><i class="fa-solid fa-cart-shopping"></i></a></li>

            </ul>
            <!-- MOBILE MENU TOGGLE -->
            <div class="hamburger-menu" id="hamburger-menu">
                <div class="hamburger"></div>
            </div>
        </div>
    </div>
</div>
<!-- END NAV -->