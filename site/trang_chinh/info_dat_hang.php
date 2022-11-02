
<?php
require_once "../../global.php";
require_once "../../dao/customer.php";

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $each = customer_select_by_id($_SESSION['user']['id']);
?>
    <form action="process_checkout.php" method="post" class="mt-3">
        <h3 class="my-3 text-info text-center">Thông tin đặt hàng</h3>
        <div class="form-group">
            <label for="">Tên người nhận</label>
            <input type="text" class="form-control" name="name_receiver" value="<?= $each['name'] ?>">
        </div>
        <div class="form-group">
            <label for="">

                Số điện thoại người nhận
            </label>
            <input class="form-control" type="text" name="phone_receiver">

        </div>
        <div class="form-group">
            <label for="">

                Địa chỉ người nhận
            </label>
            <input class="form-control" type="text" name='address_receiver'>

        </div>
        <div class="form-group">

            <button class="btn btn-primary" name="dat_hang">Đặt hàng</button>
        </div>
    </form>
<?php  }  ?>