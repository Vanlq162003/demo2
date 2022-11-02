<h1 class="text-center py-3 text-primary">Chỉnh sửa thông tin khách hàng</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="" class="fw-bold py-2">Mã khách hàng</label>
            <input type="text" readonly  name="id" value="<?= $id ?>" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label for="" class="fw-bold py-2">Họ Tên</label>
            <input type="text" name="name" value="<?= $name ?>" class="form-control">
        </div>
    </div>
  
        <div class="row">
        <div class="form-group col-sm-6">
            <label for="" class="fw-bold py-2">Eamil</label>
            <input type="text" name="email" value="<?= $email ?>" class="form-control" readonly>
        </div>

        <div class="form-group col-sm-6">
            <label for="" class="fw-bold py-2">Hình ảnh</label>
            <input type="hidden" name="avatar_old" value="<?= $avatar ?>">

            <input type="file" name="avatar_new" class="form-control">
            <div style="width:100px">
                <img src="<?=$CONTENT_URL?>/images/users/<?= $avatar ?>" width="100" height="100" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="" class="fw-bold py-2">Kích hoạt</label>
            <div class="form-control">
                <label class="radio-inline">
                    <input type="radio" class="m-2" name="kich_hoat" value="0" <?= ($kich_hoat == '0') ? 'checked' : ''; ?>>Chưa kích hoạt</label>
                <label class="radio-inline">
                    <input type="radio" class="m-2" name="kich_hoat" value="1" <?=($kich_hoat == '1') ? 'checked' : ''; ?>>Kích hoạt</label>
            </div>
        </div>

        <div class="form-group col-sm-6">
            <label for="" class="fw-bold py-2">Vai trò</label>
            <div class="form-control">
                <label class="radio-inline">
                    <input type="radio" class="m-2" name="vai_tro" value="0" <?= ($vai_tro == '0') ? 'checked' : ''; ?>>Khách hàng</label>
                <label class="radio-inline">
                    <input type="radio" class="m-2" name="vai_tro" value="1" <?=($vai_tro == '1') ? 'checked' : ''; ?>>Nhân viên</label>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="form-group col-sm-12 py-3">
            <button name="btn_update" class="btn btn-success">Cập nhập</button>
            <button type="reset" class="btn btn-warning mx-2">Nhập lại</button>
            <a href="index.php" class="btn btn-primary">Thêm mới</a>
            <a href="index.php?btn_list" class="btn btn-info mx-2">Danh sách</a>
        </div>
    </div>
</form>