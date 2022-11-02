<?php
// die($sql);
$sum = 0;
?>
<h2 class="my-3 p-1 text-center">Chi tiết đơn hàng</h2>
<table class="table">
    <tr class="table-success">
        <th>Ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng </th>
        <th>Tổng tiền</th>

    </tr>
    <?php foreach ($result as $each) :
    ?>


        <tr>
            <td>
                <img width="100" height="" src="<?= $CONTENT_URL ?>/images/products/<?= $each['image'] ?>" alt="">

            </td>
            <td>
                <?= $each['name'] ?>
            </td>
            <td>
                <?= $each['price'] ?>
            </td>
            <td>
                <?= $each['quantity']; ?>

            </td>

            <td>
                <?php $result = $each['quantity']
                    * $each['price'];
                echo $result;
                $sum += $result;
                ?>đ

            </td>

        </tr>
    <?php endforeach ?>
</table>
<h3 class="mt-3">Tổng tiền đơn này là

    <?= $sum ?>đ
</h3>