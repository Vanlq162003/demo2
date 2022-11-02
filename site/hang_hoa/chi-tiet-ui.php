<p class="text-center fs-4 py-4">Chi tiết sản phẩm</p>
<div class="row mt-4">
    <div class="col-5 text-center">
        <div class="products_img">
            <img width="100%" src='<?= $CONTENT_URL ?>/images/products/<?= $image ?>'>
        </div>
    </div>
    <div class="col-6">
        <h5 class="text-center mb-2">
            <?= $name ?>
        </h5>
        <div class="my-2">
            <?= $description ?>

        </div>
        <div class="mt-2">
            <ul class="list-style-none ">
                <li class="p-2">MÃ HH: <?= $id ?></li>
                <li class="p-2">TÊN HH: <?= $name ?></li>
                <li class="p-2">ĐƠN GIÁ: <?= number_format($price, 2) ?></li>
                <li class="p-2">GIẢM GIÁ: <?= $sell ?>%</li>
            </ul>
            <div class="p-2">
                Số lượng <button class="btn btn-danger mx-2">-</button>1
                <button class="btn btn-primary mx-2">+</button>
            </div>
            <a href="<?= $SITE_URL ?>/trang_chinh/add_to_cart.php?product_id=<?= $id ?>" class="btn btn-primary">Thêm vào giỏ hàng</a>
        </div>
    </div>
</div>
<div class="row mt-4 ">
    
</div>
<div class="row mt-4 ">
    <h4>Bình luận </h4>
    <div class="border w-75 h-25">
    </div>
</div>

<?php require 'binh-luan.php'; ?>
<?php require 'hang-cung-loai.php'; ?>