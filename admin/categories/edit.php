<form action="index.php" method="post" enctype="multipart/form-data">
    <h1 class="py-3 text-center text-primary">Sửa Danh mục</h1>
    <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Tên loại</label>
            <input type="text" class="form-control w-50" id="formGroupExampleInput2" value="<?= $name ?>" name="name">
        </div>
    <input type="hidden" value="<?= $id ?>" name="id">
    <div class="row">
        <div class="form-group col-sm-12">
            <button name="btn_update" class="btn btn-success">Cập nhập</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
            <a href="index.php" class="btn btn-warning">
                Thêm mới
            </a>
            <a href="index.php?btn_list" class="btn btn-info">
                Danh sách
            </a>
        </div>
    </div>
</form>