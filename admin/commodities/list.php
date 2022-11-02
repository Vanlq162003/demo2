<h3 class="text-center py-3 text-primary">Quản lý hàng hóa</h3>
<form action="index.php" method="post" enctype="multipart/form-data">
    <table class="table">
        <thead class="alert-success">
            <tr>
                <th></th>
                <th>Mã hh</th>
                <th class="w-25">Tên HH</th>
                <th>Ảnh </th>
                <th>Đơn giá</th>
                <th>Giảm giá</th>
                <th>Loại hàng</th>
                <th>Lượt xem </th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($items as $value) :
                extract($value);
            ?>

                <tr>
                    <th>
                        <input type="checkbox" name="id[]" value="<?= $id ?>">
                    </th>

                    <td class="pb-3 pt-3"><?= $id ?></td>
                    <td class="pb-3 pt-3"><?= $name ?></td>
                    <td class="pb-3 pt-3"><img style="width:100px;" src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt=""></td>

                    <td class="pb-3 pt-3">$<?= number_format($price, 2) ?></td>
                    <td class="pb-3 pt-3"><?= number_format($sell) ?>%</td>
                    <td class="pb-3 pt-3"><?= $commodity_id ?></td>
                    <td class="pb-3 pt-3"><?= $view ?></td>
                    <td class="pb-3 pt-3">
                        <a href="index.php?btn_edit&id=<?= $id ?>" class="btn btn-warning">Sửa</a>
                        <a href="index.php?btn_delete&id=<?= $id ?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="9">
                    <button id="check-all" class="btn btn-success">
                        Chọn tất cả
                    </button>
                    <button id="clear-all" class="btn btn-warning">
                        Bỏ chọn tất cả
                    </button>
                    <button id="delete-all" class="btn btn-danger" name="btn_delete">
                        Xóa các mục đã chọn
                    </button>

                    <a href="index.php" class="btn btn-info">Nhập thêm</a>
                </td>
            </tr>
        </tfoot>
    </table>
    <div class="wrap-btn" style="display: flex; justify-content: end;">
        <nav aria-label="...">
            <ul class="pagination">

                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item " aria-current="page">
                    <span class="page-link">2</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>

</form>