<?php
require_once '../../global.php';
extract($_REQUEST);
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<link rel="stylesheet" href="../../content/css/style1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $().ready(function() {
        $("#form_register").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                
                "password": {
                    required: true,
                    minlength: 8
                },
                "email": {
                    required: true,
                    email: true
                }
            },
            messages: {
               

                "password": {
                    required: "Bạn chưa nhập mật khẩu",
                    minlength: "Mật khẩu >8 kí tự "
                },
                "email": {
                    required: "Bạn chưa nhập email",
                    email: "Bạn nhập sai định dạng email rồi ",
                }
            }
        });
    });
</script>
<style>
    .error {
        color: red;
    }
</style>
<div class="login-form w-50 d-flex flex-column justify-content-center m-auto">
    <h2 class="p-3 mt-3 text-center"><a class="text-decoration-none" href="../trang_chinh/index.php">XShop</a></h2>

    <form action="dang-nhap.php" method="post" id="form_register">
        <h3 class="text-center mt-5">Đăng Nhập</h3>
        <div class="mb-3 mt-3 px-3">
            <label for="username" class="form-label">Eamil đăng nhập:</label>
            <input type="email" class="form-control" id="username" placeholder="Nhập username" name="email" />
        </div>
        <div class="mb-3 px-3">
            <label for="pwd" class="form-label">Mật khẩu:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="password" />
        </div>
        <div class="form-check mb-3 mx-3">
            <label class="form-check-label" style="font-size: 14px">
                <input class="form-check-input" type="checkbox" checked name="ghi_nho" />
                Ghi nhớ tài khoản
            </label>
        </div>
        <div class="form-group text-center">

            <button type="submit" name="btn_login" class="btn btn-primary mx-3 pb-2 mb-3 trans-04">
                Đăng nhập
            </button>
            <div class="opt-acc d-flex justify-content-center">
                <ul>
                    <li><a href="<?= $SITE_URL ?>/tai_khoan/index.php?quen-mk">Quên mật khẩu ?</a></li>
                    <li><a href="<?= $SITE_URL ?>/tai_khoan/index.php?btn_register_new">Đăng ký tài khoản mới</a></li>
                </ul>
            </div>
        </div>
    </form>

</div>