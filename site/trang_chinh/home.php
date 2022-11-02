<?php
require_once "../../global.php";
require_once '../../dao/commodities.php';
// $items_all = commodities_select_dac_biet();
$items_all = commodities_select_all_home();

require "slider.php";

?>

<link rel="stylesheet" href="../../content/css/products.css">
<style>
    img {
        width: 100%;
    }
</style>

<a href="" class="btn btn-info w-25 mt-3">
    Hàng đăc biệt </a>
<div class="row  pt-3 d-flex align-content-stretch justify-content-between flex-wrap">
    <?php
    if ($items_all) {

        foreach ($items_all as $value) : extract($value);
            if ($special == 0) { ?>
                <div class="col-4 mt-2 mb-2 product-item  p-0  ">
                    <div class="product-img" style="height: 200px;">
                        <img src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <a class="text-light text-hover text-decoration-none" href="add_to_cart.php?product_id=<?= $id ?>">
                                    <i class="fa fa-cart-plus"></i> Add to Cart
                                </a>
                            </button>
                            <button type="button" class="col-6 py-2">
                                <a class="text-light text-hover text-decoration-none" href="<?= $SITE_URL ?>/hang_hoa/chi-tiet.php?id=<?= $id ?>">

                                    <i class="fa fa-binoculars"></i> View
                                </a>
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3 text-center d-flex flex-column  align-content-stretch">
                        <span class="product-type"></span>
                        <a style="min-height: 48px;" href="<?= $SITE_URL ?>/hang_hoa/chi-tiet.php?id=<?= $id ?>" class="d-block  text-dark text-decoration-none py-2 product-name"><?= $name ?></a>
                        <span class="product-price pt-3 fs-5"><?= number_format($price, 2) ?>đ</span>
                        <div class="rating d-flex mt-1 py-2 justify-content-between">
                            <div>

                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                            <span class="text-right fs-6"><?= $view ?> lượt xem</span>
                        </div>
                    </div>
                </div>

    <?php }
        endforeach;
    } ?>
</div>

<a href="" class="btn btn-info w-25 mt-3">
    Điện thoại </a>
<div class="row  pt-3 d-flex align-content-stretch justify-content-between flex-wrap">
    <?php
    if ($items_all) {

        foreach ($items_all as $value) : extract($value);
            if ($category_id == 4) { ?>
                <div class="col-4 mt-2 mb-2 product-item  p-0  ">
                    <div class="product-img" style="height: 200px;">
                        <img src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <a class="text-light text-hover text-decoration-none" href="add_to_cart.php?product_id=<?= $id ?>">
                                    <i class="fa fa-cart-plus"></i> Add to Cart
                                </a>
                            </button>
                            <button type="button" class="col-6 py-2">
                                <a class="text-light text-hover text-decoration-none" href="<?= $SITE_URL ?>/hang_hoa/chi-tiet.php?id=<?= $id ?>">

                                    <i class="fa fa-binoculars"></i> View
                                </a>
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3 text-center d-flex flex-column  align-content-stretch">
                        <span class="product-type"></span>
                        <a style="min-min-height: 48px;" href="<?= $SITE_URL ?>/hang_hoa/chi-tiet.php?id=<?= $id ?>" class="d-block  text-dark text-decoration-none py-2 product-name"><?= $name ?></a>
                        <span class="product-price pt-3 fs-5"><?= number_format($price, 2) ?>đ</span>
                        <div class="rating d-flex mt-1 py-2 justify-content-between">
                            <div>

                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                            <span class="text-right fs-6"><?= $view ?> lượt xem</span>
                        </div>
                    </div>
                </div>

    <?php }
        endforeach;
    } ?>
</div>
<a href="" class="btn btn-info w-25 mt-3">
    Máy tính </a>
<div class="row  pt-3 d-flex align-content-stretch justify-content-between flex-wrap">
    <?php
    if ($items_all) {

        foreach ($items_all as $value) : extract($value);
            if ($category_id == 2) { ?>
                <div class="col-4 mt-2 mb-2 product-item  p-0  ">
                    <div class="product-img" style="height: 200px;">
                        <img src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt="" class="img-fluid d-block mx-auto">
                        <span class="heart-icon">
                            <i class="far fa-heart"></i>
                        </span>
                        <div class="row btns w-100 mx-auto text-center">
                            <button type="button" class="col-6 py-2">
                                <a class="text-light text-hover text-decoration-none" href="add_to_cart.php?product_id=<?= $id ?>">
                                    <i class="fa fa-cart-plus"></i> Add to Cart
                                </a>
                            </button>
                            <button type="button" class="col-6 py-2">
                                <a class="text-light text-hover text-decoration-none" href="<?= $SITE_URL ?>/hang_hoa/chi-tiet.php?id=<?= $id ?>">

                                    <i class="fa fa-binoculars"></i> View
                                </a>
                            </button>
                        </div>
                    </div>

                    <div class="product-info p-3 text-center d-flex flex-column  align-content-stretch">
                        <span class="product-type"></span>
                        <a style="min-height: 48px;" href="<?= $SITE_URL ?>/hang_hoa/chi-tiet.php?id=<?= $id ?>" class="d-block  text-dark text-decoration-none py-2 product-name"><?= $name ?></a>
                        <span class="product-price pt-3 fs-5"><?= number_format($price, 2) ?>đ</span>
                        <div class="rating d-flex mt-1 py-2 justify-content-between">
                            <div>

                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                            <span class="text-right fs-6"><?= $view ?> lượt xem</span>
                        </div>
                    </div>
                </div>

    <?php }
        endforeach;
    } ?>
</div>