<div class="row">
    <?php
    foreach ($items as $item) {
    // var_dump($item);
    // die;
        extract($item);

    ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnall text-center">
                <a href="chi-tiet.php?id=<?= $id ?>">
                    <img width="100%" src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt=""></a>
                    <div class="caption text-left">
                        <h3>$<?=number_format($price, 2)?></h3>
                        <p><a href="chi-tiet.php?id=<?= $id ?>"><?=$name?></a></p>
                    </div>
            </div>
        </div>
    <?php } ?>
</div>