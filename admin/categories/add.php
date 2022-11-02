<article class="mt-4 mb-5" style="padding-bottom: 200px;">
    <h1 class="mx-3 text-center text-primary">Thêm mới Danh mục sản phẩm</h1>
    <form action="index.php?act=add" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label " style="font-weight: bold;">Mã loại</label>
            <input type="text" class="form-control w-50 bg-light" id="formGroupExampleInput" placeholder="auto number" readonly>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Tên loại</label>
            <input type="text" name="name" class="form-control w-50" id="formGroupExampleInput2">
            <?php if (isset($_GET['nameerr'])) : ?>
                    <span style="color: red"><?= $_GET['nameerr'] ?></span>
                <?php endif ?>
        </div>
        <div class="form-group">
            <button type="submit" name="btn_insert" class="btn btn-success">Thêm mới</button>
            <button type="reset" class="btn btn-danger">Nhập lại</button>
            <a href="index.php?btn_list" class="btn btn-primary">Danh sách</a>
        </div>
    </form>
</article>
