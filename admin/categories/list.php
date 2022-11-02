<article>
    <h1 class="text-center text-primary py-3">Danh sách loại hàng</h1>

    <table class="table mt-4 mb-4">

        <thead class="table-success">
            <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $value) :
                extract($value);
            ?>

                <tr>
                    <td class="pb-3 pt-3">
                        <input type="checkbox" name="id[]" value="<?= $id ?>">
                    </td>
                    <td class="pb-3 pt-3"><?= $id ?></td>
                    <td class="pb-3 pt-3"><?= $name ?></td>
                    <td class="td-opt pb-3 pt-3">
                        <a href="index.php?btn_edit&id=<?= $id ?>" class="btn btn-success">Sửa</a>
                        <a href="index.php?btn_delete&id=<?= $id ?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="form-group pb-4">
        <button id="check-all" class="btn btn-success">Chọn tất cả</button>
        <button id="clear-all" class="btn btn-warning">Bỏ chọn tất cả</button>
        <button id="delete-all" name="btn_delete" class="btn btn-danger">Xóa các mục đã chọn</button>

        <a href="index.php" class="btn btn-primary">
            Nhập thêm
        </a>

    </div>
</article>