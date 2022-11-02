<nav class="d-flex flex-wrap navbar-expand-lg navbar-success py-4">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand  col-3 order-lg-0" href="<?= $SITE_URL ?>/trang_chinh/index.php">
            <!-- <img src="../../content/images/products/3.PNG" style="width:50px; height:50px" alt=""> -->
            <span class="text-uppercase fw-lighter ms-2">Xshop</span>

        </a>


        <form class="d-flex col-6">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light bg-warning text-success " type="submit">Search</button>
        </form>
        <div class="order-lg-2 col-3 nav-btns d-flex justify-content-center">
            <button type="button" class="btn position-relative">
                <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
                <a class="text-light text-decoration-none pl-2" href="<?= $SITE_URL ?>/trang_chinh/index.php?view_cart"> <i class="fa fa-shopping-cart  text-black-50"></i></a>
            </button>
            <!-- <button type="button" class="btn position-relative">
                <i class="fa fa-heart"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
            </button> -->
            <!-- <button type="button" class="btn position-relative">
                <i class="fa fa-search"></i>
            </button> -->
        </div>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>


    </div>

</nav>
<nav class="navbar d-flex flex-wrap navbar-expand-lg navbar-success bg-warning bg-gradient ">
    <div class="container">




        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-lg-1" id="navMenu">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php">Trang chủ</a>
                </li>
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php?gioi_thieu">Giới thiệu</a>
                </li>
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php?lien_he">Liên hệ</a>
                </li>
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php?gop_y">Góp ý</a>
                </li>
                <li class="nav-item px-2 py-2">
                    <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php?hoi_dap">Hỏi đáp</a>
                </li>

                <?php
                // require '../global.php';
                if (!isset($_SESSION['user']) || empty($_SESSION['user'])) { ?>

                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/tai_khoan/index.php?btn_form_dn">Đăng nhập</a>

                    </li>
                    <li class="nav-item px-2 py-2">

                        <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/tai_khoan/index.php?btn_register_new">Đăng kí</a>
                    </li>
                <?php
                } else if (($_SESSION['user']['vai_tro']==0)) { ?>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php?btn_logoff">Đăng Xuất</a>

                    </li>
                <?php
                } else if (($_SESSION['user']['vai_tro'] == 1)) { ?>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="<?= $ADMIN_URL ?>/trang_chinh">Quản lí website</a>

                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="<?= $SITE_URL ?>/trang_chinh/index.php?btn_logoff">Đăng Xuất</a>

                    </li>
                <?php
                }
                ?>



            </ul>
        </div>
    </div>
</nav>