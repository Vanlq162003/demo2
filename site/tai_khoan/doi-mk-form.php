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
        $("#form_upade_password").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "password": {
                    required: true,
                    minlength: 8
                },
                "password2": {
                    equalTo: true,
                    minlength: 8
                },
                "password3": {
                    equalTo: "#password",
                    minlength: 8
                }
            },
            messages: {


                "password": {
                    required: "Bạn chưa nhập mật khẩu cũ ",
                    minlength: "Mật khẩu >8 kí tự "
                },

                "password2": {
                    required: "Bạn chưa nhập mật khẩu",
                    minlength: "Mật khẩu >8 kí tự "
                },
                "password3": {
                    equalTo: "Nhập lại mật khẩu không chính xác",
                    minlength: "Mật khẩu >8 kí tự "

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

<form action="doi-mk.php" method="post" id="form_upade_password">

    <h3 class="text-center">Đổi mật khẩu </h3>

    <?php
    if (strlen($MESSAGE)) {
        echo "<h4 class='alert text-warning'>$MESSAGE</h4>";
    }
    ?>
    <div class="form-group">
        <label for="">Email</label>
        <input name="email" value="<?= $_SESSION['user']['email'] ?>" class="form-control" disabled>
        <input name="id" value="<?= $_SESSION['user']['id'] ?>" type="hidden" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Mật Khẩu cũ</label>
        <input name="password" type="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Mật khẩu mới</label>
        <input class="form-control" id="password" name="password2" type="password">
    </div>
    <div class="form-group">
        <label for="">Nhập lại mật khẩu mới</label>
        <input class="form-control" name="password3" type="password">
    </div>


    <div class="form-group">
        <button class="btn btn-primary" name="btn_change" type="submit">Đổi mật khẩu</button>
    </div>
</form>