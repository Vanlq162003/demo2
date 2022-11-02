<h1 class="text-center py-3 text-primary">Sửa thông tin Hàng hóa</h1>
<!-- `name`, `price`, `sell`, `image`, `date_add`, `description`, `special`, `view`, `category_id` -->
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="">Mã hàng hóa</label>
            <input type="text" name="id" value="<?= $id ?>" class="form-control" readonly value="" placeholder="">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Tên hàng hóa</label>
            <input type="text" name="name" value="<?= $name ?>" class="form-control" placeholder="">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Giá hàng hóa</label>
            <input type="text" name="price" value=<?= $price ?> class="form-control" placeholder="">
        </div>

    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="">Giá sell</label>
            <input type="text" name="sell" value="<?= $sell ?>" class="form-control" placeholder="">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Hình ảnh</label>
            <div>

                <img style="width:100px;" src="<?=$CONTENT_URL?>/images/products/<?= $image ?>">
            </div>
            <input type="hidden" name="image" value="<?= $image ?>">
            <label for="">Đổi ảnh mới tại đây</label>
            <input type="file" name="image_new" class="form-control">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Loại hàng</label>
            <select name="category_id" class="form-control">
                <?php foreach ($category_all as $value) :  ?>

                    <option value="<?= $value['id'] ?>" <?php if ($value['id'] == $category_id) { ?> selected <?php } ?>>
                        <?= $value['name'] ?>
                    </option>

                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="row">

        <div class="form-group col-sm-4">
            <label for="">Hàng đặc biệt </label>
            <div class="form-control">
                <label class="radio-inline">
                    <input type="radio" name="special" value="0" <?= ($special == '0') ? 'checked' : ''; ?>>Đặc biệt </label>
                <label class="radio-inline"><input type="radio" name="special" value="1" <?= ($special == '1') ? 'checked' : ''; ?> checked>Bình thường</label>
            </div>
        </div>
        <div class="form-group col-sm-4">
            <label for="">Ngày thêm hàng</label>
            <input type="date" name="date_add" class="form-control datepicker" value="<?= $date_add ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Số lượng xem</label>
            <input type="text" name="view" readonly value="<?= $view ?>" class="form-control" placeholder="">

        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12">
            <label for="">Mô tả</label>
            <textarea name="description" class="form-control" value="<?= $description ?>" cols="30" rows="4"></textarea>
        </div>


        <div class="form-group col-sm-12">
            <button name="btn_update" class="btn btn-success">Cập nhập</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
            <a href="index.php" class="btn btn-primary">Thêm mới</a>
            <a href="index.php?btn_list" class="btn btn-info">Danh sách</a>

        </div>
    </div>
</form>