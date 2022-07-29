<?php $tim_kiem = $_GET['tim_kiem'] ?? ''; ?>
<div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>

    <div class="search">
        <form>

            <label>
                <input type="search" name="tim_kiem" value="<?php echo $tim_kiem ?>" placeholder="Tìm kiếm" />
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </form>
    </div>

    <div class="user">

        <img src="../assets/imgs/customer01.jpg" alt="" style="width: 40px;height: 40px; border-radius: 50%;" />
    </div>
</div>