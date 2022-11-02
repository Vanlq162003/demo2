<?php
require_once "../../global.php";
if (strlen($MESSAGE)) {
    echo "<h5 class='p-3 mt-3'>$MESSAGE</h5>";
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
                "password_new": {
                    required: "#password",
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
                "password_new": {
                    required: "Nhập lại mật khẩu không chính xác",
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

    <form action="quen-mk.php" method="post" id="form_register">
        <h3 class="text-center mt-3 mb-2">Đổi mật khẩu mới tại đây</h3>


        <?php
        if (exist_params("dung")) { ?>
         <div class="form-group">
                <label for="" class="p-2 fw-bold">Email</label>
                <input type="email" value="<?=$_GET["dung"]?>" class="form-control" name="email" readonly>
            </div>
            <div class="form-group">
                <label for="" class="p-2 fw-bold">Mật khẩu mới</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="">
            </div>
            <div class="form-group">
                <label for="" class="p-2 fw-bold"> Nhập lại mật khẩu</label>
                <input name="password2" class="form-control" type="password">
            </div>

            <div class="form-group text-center">
                <button class="btn btn-success my-3" name="btn_forgot">Đổi mật khẩu</button>
            </div>
        <?php } else {
            if (isset($_GET["check"])) {
                echo "<h5 class='text-danger'>" . $_GET["check"] . "</h5>";
            }
        ?>
            <div class="form-group">
                <label for="" class="p-2 fw-bold">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group text-center">
                <button class="btn btn-success my-3" name="btn_check_email">Kiểm tra email</button>
            </div>
        <?php }
        ?>
    </form>
</div>