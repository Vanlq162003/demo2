<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../../content/css/style.css">

<?php

require "../../global.php";


extract($_REQUEST);

echo $MESSAGE;

if (exist_params("gioi_thieu", $_REQUEST)) {
    $VIEW_NAME = "gioi-thieu.php";
} else if (exist_params("lien_he", $_REQUEST)) {
    $VIEW_NAME = "lien-he.php";
} else if (exist_params("gop_y", $_REQUEST)) {
    $VIEW_NAME = "gop-y.php";
} else if (exist_params("hoi_dap", $_REQUEST)) {
    $VIEW_NAME = "hoi-dap.php";
} else if (exist_params("view_cart", $_REQUEST)) {
    $VIEW_NAME = "detail_cart.php";
} else if (exist_params("id", "type", $_REQUEST)) {
    $VIEW_NAME = "update_quantity_in_cart.php";
} else if (exist_params("sigin")) {
    require "../../global.php";
    header("Location: ../tai_khoan/dang-nhap-form.php");
    die;
} else if (exist_params("btn_logoff", $_REQUEST)) {

    session_unset();
    $VIEW_NAME = "home.php";
} else if (exist_params('mua_hang')) {
    if (isset($_SESSION['user'])) {
   
        $VIEW_NAME = "info_dat_hang.php";
    } else {
        header("Location:../tai_khoan/dang-nhap-form.php");
        die;
    }
}
 else {
    $VIEW_NAME = "home.php";
    // require '../../dao/commodities.php';
    // $dac_biet_list = commodities_select_dac_biet();
    // $items_all = commodities_select_all_home();
}


require "../layout.php";
