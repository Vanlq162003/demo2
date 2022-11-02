<div class="row w-75">
    <h4 class="my-2 pt-1  ">Sản phầm cùng loại</h4>

    <hr>
</div>
<ol class="list-group list-group-flush">
    <?php
    $hh_cung_loai = commodities_select_by_loai($category_id);
    foreach ($hh_cung_loai as $hh) {
        echo "<li class='list-group-item'><a class=' pb-1 text-decoration-none  text-dark '  href='chi-tiet.php?id=$hh[id]'>
$hh[name]</a></li>";
    }
    ?>
</ol>