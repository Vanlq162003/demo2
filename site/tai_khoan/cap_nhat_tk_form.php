<?php
require '../../check_user_admin.php';
if (isset($MESSAGE)) {


    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
}
extract($_SESSION['user']);
?>
<form action="cap_nhat_tk.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <div class="form-group">
            <img style="width: 200px; height: 200px" src="<?= $CONTENT_URL ?>/images/users/<?= $avatar ?>">

        </div>
        <div class="form-group"> 

        </div>
        <input name="image_old" class="form-control" type="hidden" value="<?= $avatar ?>">
       
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input name="id" class="form-control" type="hidden" value="<?= $id ?>">
        <input name="email" class="form-control" type="text" value="<?= $email ?>">
    </div>
    <div class="form-group">
        <label for="">Họ tên</label>
        <input name="name" class="form-control" type="text" value="<?= $name ?>">
    </div>
    <div class="form-group">
        <label for="">Thay ảnh mới tại đây</label>
        <input class="form-control" type="file" name="image_new">

      
    </div>
    <div class="form-group">
        <label for="">Vai trò</label>
        <input name="vai_tro" disabled class="form-control" value="<?= $vai_tro == 0 ? 'Khách hàng' : 'Nhân viên' ?>" type="text">
    </div>
    <div class="form-group">

        <!-- <button type="submit" class="btn btn-default" name="btn_update">Cập nhật</button> -->
        <button type="submit" name="update_tk_customer" class="btn btn-default">Cập nhập
        </button>
    </div>

</form>