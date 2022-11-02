<?php
require_once "../../global.php";
require_once "../../dao/commodities.php";
$list_top10 = commodities_select_top10();

?>

<div class=" card my-3">
<div class="card-header" style="font-weight: 500">
            TOP 10 YÊU THÍCH
        </div>
    <ul class="list-group list-group-flush">
        <?php foreach ($list_top10 as $value) : extract($value); ?>
            <li class="list-group-item">
                <div class="d-flex justify-content-betwend align-items-center">
                    <div class="w-25 mr-3">
                        <a href="../hang_hoa/chi-tiet.php?id=<?= $id ?>"><img src="<?=$CONTENT_URL?>/images/products/<?= $image ?>" style="width: 100%; height: 100%;" alt=""></a>
                    </div>
                    <div class="w-75 p-2 m-2">
                    <a class="text-dark text-decoration-none " href="../hang_hoa/chi-tiet.php?id=<?= $id ?>" class="ml-2"><?= $name ?></a>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
       
    </ul>

