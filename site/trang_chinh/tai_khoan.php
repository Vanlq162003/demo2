
<div class="login-form">
    <div class="card">
        <div class="card-header" style="font-weight: 500">TÀI KHOẢN</div>

        <form action="<?= $SITE_URL ?>/tai_khoan/dang-nhap.php" method="post">
            <div class="mb-3 mt-3 px-3">
                <label for="username" class="form-label">Eamil đăng nhập:</label>
                <input type="email" class="form-control" id="username" placeholder="Nhập email" name="eamil" />
            </div>
            <div class="mb-3 px-3">
                <label for="pwd" class="form-label">Mật khẩu:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="password" />
            </div>
            <div class="form-check mb-3 mx-3">
                <label class="form-check-label" style="font-size: 14px">
                    <input class="form-check-input" type="checkbox"  checked name="ghi_nho" />
                    Ghi nhớ tài khoản
                </label>
            </div>
            <button type="submit" class="btn btn-primary mx-3 pb-2 mb-3 trans-04">
                Đăng nhập
            </button>
            <div class="opt-acc">
                <ul>
                    <li><a href="<?= $SITE_URL ?>/tai_khoan/index.php?quen-mk">Quên mật khẩu ?</a></li>
                    <li><a href="<?= $SITE_URL ?>/tai_khoan/index.php?btn_register_new">Đăng ký tài khoản mới</a></li>
                </ul>
            </div>
        </form>
    </div>
</div>