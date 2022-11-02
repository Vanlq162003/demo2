<?php
require_once "../../dao/pdo.php";
require_once "../../dao/categories.php";
?>

<!-- list opt -->
<div class="list-opt mt-4">
    <div class="card">
        <div class="card-header" style="border-bottom: none; font-weight: 500">
            DANH MỤC
        </div>
        <div class="card-text">
            <ul class="list-group" style="border-radius: inherit; border-right: none">
                <?php
                $dsloai = loai_selecAll();

                if ($dsloai) {

                    foreach ($dsloai as $value) {
                        extract($value);
                ?>

                        <li class="list-group-item list-group-item-action" style="border-left: none; border-right: none">
                            <a href="../hang_hoa/liet_ke.php?id=<?= $id ?>" class="cate text-dark text-decoration-none"><?= $name ?></a>
                        </li>
                <?php }
                } else {
                    echo "Không tìm thấy danh dục";
                } ?>
            </ul>
        </div>
        <div class="card-footer" style="border-top: none">
            <form action="../hang_hoa/liet_ke.php">

                <input type="text" name="keywords" class="form-control" placeholder="Nhập từ khóa tìm kiếm" />
            </form>

        </div>
    </div>
</div>