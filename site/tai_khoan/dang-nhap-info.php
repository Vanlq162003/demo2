<style>
    .nn-panel-login img {
        width: 120px;
        height: 140px;
        bottom: 1px solid gray;
        border-radius: 5px;
    }
</style>
<?php

// require "../../global.php";
?>
<div class="panel panel-default nn-panle-login">
    <div class="panel-heading text-center py-3">TÀI KHOẢN</div>
    <div class="panel-body m-auto d-flex flex-column align-items-center">
        
        <div class="text-center" style="width: 200px;">
            <div>

                <img style="width:200px; height:180px;" src="<?= $CONTENT_URL ?>/images/users/<?= $_SESSION['user']['avatar'] ?>">
            </div>
            <br>
            <div class="text-center">

                <?= $_SESSION['user']['name'] ?>
            </div>
        </div>
        <br>
        <!-- <li>
            <a href="<?= $SITE_URL ?>/trang_chinh/index.php?btn_logoff">
                Đăng xuất
            </a>
        </li> -->
        <ul>

            <li class="" ><a  class="text-dark text-decoration-none"href="<?= $SITE_URL ?>/tai_khoan/index.php?doi-mk">Đổi mật khẩu</a></li>
            <li class=""><a class="text-dark text-decoration-none"href="<?= $SITE_URL ?>/tai_khoan/index.php?update_tk">Cập nhật tài khoản</a></li>
        </ul>
        <?php
        // if ($_SESSION['user']['vai_tro'] == TRUE) {
        //     echo "<li><a href='$ADMIN_URL/trang_chinh'>Quản trị website</a></li>";
        // }
        ?>
    </div>
</div>