<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>


<div class="navigation">
    <ul>
        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="logo-ionitron"></ion-icon>
                </span>
                <span class="title" style="font-size: 22px; font-weight: 600;">Admin</span>
            </a>
        </li>

        <li class="<?= ($activePage == 'index') ? 'active-bg' : '' ?>">
            <a href="../home/index.php" class="<?= ($activePage == '/admin/home/') ? 'active-text' : '' ?>">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Trang chủ</span>
                <span class="title"><?php echo  $activePage ?></span>
            </a>
        </li>
        <li class="<?= ($activePage == 'index2') ? 'active-bg' : '' ?>">
            <a href="../nha_san_xuat/index2.php" class="<?= ($activePage == 'index2') ? 'active-text' : '' ?>">
                <span class="icon">
                    <ion-icon name="reader-outline"></ion-icon>
                </span>
                <span class="title">Danh mục</span>
                <span class="title"><?php echo  $activePage ?></span>

            </a>
        </li>
        <li class="active-bg--product">
            <a href="../san_pham/index.php" class="active-text--product">
                <span class="icon">
                    <ion-icon name="fast-food-outline"></ion-icon>
                </span>
                <span class="title">Sản phẩm</span>
            </a>
        </li>

        <li class="active-bg--order">
            <a href="../orders/index.php" class="active-text--order">
                <span class="icon">
                    <ion-icon name="bicycle-outline"></ion-icon>
                </span>
                <span class="title">Order</span>
            </a>
        </li>

        <li class="active-bg--mess">
            <a href="../messenger/messenger.php" class="active-text--mess">
                <span class="icon">
                    <ion-icon name="chatbubble-outline"></ion-icon>
                </span>
                <span class="title">Messages</span>
            </a>
        </li>





        <li>
            <a href="./t.html">
                <span class="icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <span class="title">Mật khẩu</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Đăng xuất</span>
            </a>
        </li>
    </ul>
</div>