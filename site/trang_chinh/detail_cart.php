<?php
require_once "../../global.php";
require_once "../../dao/customer.php";

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<h5 class='text-center text-info mt-4'>Bạn chưa có đặt sản phẩm nào.</h5>";
    exit;
} else {

    $cart = $_SESSION['cart'];
}

$sum = 0;
?>
<table class="table">
    <h3 class="text-center my-3">Giỏ hàng của bạn</h3>
    <tr class="table-success">
        <th>Ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng </th>
        <th>Tổng tiền</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($cart as $id => $each) :

    ?>
        <tr class="py-2">
            <td>
                <img width="100" height="" src="<?= $CONTENT_URL ?>/images/products/<?= $each['image'] ?>" alt="">

            </td>
            <td>
                <?= $each['name'] ?>
            </td>
            <td>
                <?= number_format($each['price']) ?>
            </td>
            <td>
                <a href="update_quantity_in_cart.php?id=<?= $id ?>&type=decre">
                    -
                </a>


                <?= $each['quantity']; ?>
                <a href="update_quantity_in_cart.php?id=<?= $id ?>&type=incre">
                    +
                </a>
            </td>

            <td>
                <?php $result = $each['quantity']
                    * $each['price'];
                echo $result;
                $sum += $result;
                ?>

            </td>
            <td>
                <a class="btn btn-danger" href="delete_from_cart.php?id=<?= $id ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
<h1>Tổng tiền :
    <?php echo $sum ?>
</h1>
<a href="?mua_hang"class="btn btn-primary" name="">Mua ngay</a>

