<h3 class="py-3 text-center text-primary">Thống kê hàng hóa từng loại </h3>

    <table class="table">
        <thead class="table-success">
            <tr>
                <th>Loại hàng</th>
                <th>Số lượng</th>
                <th>Giá cao nhất</th>
                <th>Giá thấp nhât</th>
                <th>Giá trung bình</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $value) :
                extract($value);
            ?>

                <tr>
                    <td class="pb-3 pt-3"><?= $name ?></td>
                    <td class="pb-3 pt-3"><?= $so_luong ?></td>
                    <td class="pb-3 pt-3">$<?=number_format($gia_min,2)?></td>
                    <td class="pb-3 pt-3">$<?=number_format($gia_max,2)?></td>
                    <td class="pb-3 pt-3">$<?=number_format($gia_avg,2)?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
       
    </table>
    <div class="wrap-btn" style="display: flex; justify-content: space-between">
        <div class="form-group pb-4">
          <a href="index.php?chart" class="btn btn-success">Xem biểu đồ</a>

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
