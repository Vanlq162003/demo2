<article>
    <form action="index.php" method="post" enctype="multipart/form-data">

        <table class="table mt-4 mb-4">
            <thead class="table-success">
                <tr>
                    <th></th>
                    <th>Mã KH</th>
                    <th>Họ và tên</th>
                    <th>Địa chỉ Email</th>
                    <th>Hình ảnh</th>
                    <th>Vai trò</th>
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
                        <td class="pb-3 pt-3"><?= $email ?></td>
                        <td class="pb-3 pt-3">
                            <img src="<?= $CONTENT_URL ?>/images/users/<?= $avatar ?>" width="50px;" height="50px;" alt="">
                        </td>
                        <td class="pb-3 pt-3">
                            <?= ($vai_tro == 1) ? "Nhân viên " : "Khách hàng" ?>
                        </td>
        
                        <td class="td-opt pb-3 pt-3">
                            <a href="index.php?btn_edit&id=<?= $id ?>" class="btn btn-info">Sửa</a>
                            <?php
                                if($_SESSION['user']['id'] != $id){  
                            ?>
                            <a href="index.php?btn_delete&id=<?= $id ?>" class=" btn btn-dagner">Xóa</a>
                            <?php }?>
                        </td>
                    </tr>


                <?php endforeach; ?>

            </tbody>
        </table>
        <div class="wrap-btn" style="display: flex; justify-content: space-between">
            <div class="form-group pb-4">
                <button id="check-all" class="btn btn-success">Chọn tất cả</button>
                <button id="clear-all" class="btn btn-warning">Bỏ chọn tất cả</button>
                <button id="delete-all" class="btn btn-danger">Xóa các mục đã chọn</button>
                <a href="index.php" class="btn btn-primary">
                    Nhập thêm
                </a>

            </div>
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

</article>