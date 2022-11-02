<?php require_once "../../global.php"; ?>

<h1 class="text-center py-3 text-primary">Thêm mới khách hàng</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <?php echo "<h6 class='text-danger'>$MESSAGE</h6>" ?>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="" class="fw-bold p-2">Họ Tên</label>
            <input type="text" name="name" class="form-control" placeholder="">
            <?php if(isset($_GET['nameerr'])):?>
                <span style="color: red"><?= $_GET['nameerr']?></span>
            <?php endif ?>
        </div>
        <div class="form-group col-sm-6">
            <label for="" class="fw-bold p-2">Mật khẩu</label>
            <input type="password" name="password" class="form-control" placeholder=""> 
            <?php if(isset($_GET['passworderr'])):?>
                <span style="color: red"><?= $_GET['passworderr']?></span>
            <?php endif ?>
           
        </div>

    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="" class="fw-bold p-2">Email</label>
            <input type="text" name="email" class="form-control" placeholder="">
            <?php if(isset($_GET['emailerr'])):?>
                <span style="color: red"><?= $_GET['emailerr']?></span>
            <?php endif ?>
        </div>
        <div class="form-group col-sm-6">
            <label for="" class="fw-bold p-2">Hình ảnh</label>
            <input type="file" name="avatar" class="form-control" placeholder="">
            <?php if(isset($_GET['avatarerr'])):?>
                <span style="color: red"><?= $_GET['avatarerr'] ?></span>
            <?php endif ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="" class="fw-bold p-2">Kích hoạt</label>
            <div class="form-control">
                <label class="radio-inline"><input type="radio" class="m-2" name="kich_hoat" value="0">Chưa kích hoạt</label>
                <label class="radio-inline"><input type="radio" class="m-2" name="kich_hoat" value="1" checked>Kích hoạt</label>
            </div>
        </div>
    
        <div class="form-group col-sm-6">
            <label for="" class="fw-bold p-2">Vai trò</label>
            <div class="form-control">
                <label class="radio-inline"><input type="radio" name="vai_tro" value="0"><span class="m-2">Khách hàng</span></label>
                <label class="radio-inline"><input type="radio" name="vai_tro" value="1" checked><span class="m-2">Nhân viên</span></label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12 py-3">
            <button name="btn_insert" class="btn btn-success">Thêm mới</button>
            <button type="reset" class="btn btn-danger mx-2">Nhập lại</button>
            <a href="index.php?btn_list" > <button class="btn btn-primary" name="btn_list">Danh sách</button></a>
            
        </div>
    </div>
</form>