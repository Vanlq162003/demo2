
<h2 class="my-2 p-2 text-center text-info">Danh sách đơn hàng</h2>
<table class="table">
    <tr class="table-success">
        <th>Mã</th>
        <th>Thời gian đặt</th>
        <th>Thông tin người nhận</th>
        <th>Thông tin người đặt </th>
        <th>Trạng thái</th>
        <th>Tổng tiền</th>
        <th>Xem</th>
        <th >Thao tác</th>
    </tr>
    <?php foreach ($result as $each) : ?>
        <tr>
            <td><?= $each['id'] ?></td>
            <td><?= $each['created_at'] ?></td>
            <td>
                <?= $each['name_receiver'] ?> <br>
                <?= $each['phone_receiver'] ?> <br>
                <?= $each['address_receiver'] ?> <br>
            </td>
            <td>
                <?= $each['name'] ?> <br>
              
            </td>
            <td>
                <?php
                switch ($each["status"]) {
                    case '0':
                        echo "Mới đặt";
                        break;
                    case '1':
                        echo "Đã duyệt";
                        break;
                    case '2':
                        echo "Đã hủy";
                        break;
                }
                ?>
            </td>
            <td><?= $each['total_price'] ?></td>
            <td>
                <a class="btn btn-info" href="index.php?id=<?= $each['id'] ?>">Xem</a>
            </td>
            <td>
                <a class="btn btn-primary mr-2" href="index.php?id_products=<?= $each['id'] ?>&status=1">
                    Duyệt
                </a>
               
                <a class="btn btn-warning ml-2" href="index.php?id_products=<?= $each['id'] ?>&status=2">
                    Hủy
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>