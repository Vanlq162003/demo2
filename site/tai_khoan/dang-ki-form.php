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
                "name": {
                    required: true,
                    maxlength: 15
                },

                "password": {
                    required: true,
                    minlength: 8
                },
                "password1": {
                    equalTo: "#password",
                    minlength: 8
                },
                "email": {
                    required: true,
                    email: true
                }
            },
            messages: {
                "name": {
                    required: "Bạn chưa có nhập họ tên",

                },

                "password": {
                    required: "Bạn chưa nhập mật khẩu",
                    minlength: "Mật khẩu >8 kí tự "
                },
                "password1": {
                    equalTo: "Nhập lại mật khẩu không chính xác",
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
    <form action="dang-ky.php" method="post" enctype="multipart/form-data" id="form_register">
        <h3 class="text-center p-2">Đăng kí</h3>

        <?php
        require_once '../../global.php';
        if (strlen($MESSAGE)) {
            echo "<h4 class='alert text-warning'>$MESSAGE</h4>";
        }
        ?>
        <div class="form-group">
            <label for="" class="fw-bold p-2">Email</label>
            <input class="form-control" type="text" name="email">
        </div>
        <div class="form-group">
            <label for="" class="fw-bold p-2">Họ tên</label>
            <input name="name" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="" class="fw-bold p-2">Mật khẩu</label>

            <input class="form-control" id="password" name="password" type="password">
        </div>
        <div class="form-group">
            <label for="" class="fw-bold p-2">Nhập lại mật khẩu </label>

            <input name="password1" class="form-control" type="password">
        </div>
        <div class="form-group">
            <label for="" class="fw-bold p-2">Ảnh</label>
            <input type="file" name="up_hinh" class="form-control">
        </div>
        <div class="form-group text-center mt-2">

            <button class="btn btn-info my-3 " name="btn_register">Đăng ký</button>
        </div>

    </form>
</div>