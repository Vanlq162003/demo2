<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../../content/css/style1.css">
<link rel="stylesheet" href="../../content/css/products.css">
<style>

</style>
<?php

require_once "../../global.php";
require "../../dao/customer.php";


extract($_REQUEST);
if (isset($_SESSION['user'])) {


    if (exist_params("update_tk", $_REQUEST)) {
        $id = $_SESSION['user']['id'];
        $customer_info = customer_select_by_id($id);
        extract($customer_info);
        // var_dump($customer_info);
        $VIEW_NAME = "cap_nhat_tk_form.php";
    } else if (exist_params("doi-mk", $_REQUEST)) {
        $VIEW_NAME = "doi-mk-form.php";
    } else {

        $VIEW_NAME = "$SITE_URL/trang_chinh/home.php";
    }
} else {
    if (exist_params("btn_register_new")) {
        header("Location:dang-ki-form.php");
        die;
        // $VIEW_NAME = "dang-ki-form.php";
    } else if (exist_params("btn_form_dn")) {
        header("Location:dang-nhap-form.php");
        // $VIEW_NAME = "dang-nhap-form.php";
        die;
    } else if (exist_params("quen-mk")) {
        header("Location:quen-mk-form.php");
        // $VIEW_NAME = "quen-mk-form.php";
        die;
        // $VIEW_NAME = "quen-mk-form.php";
    } else {

        $VIEW_NAME = "$SITE_URL/trang_chinh/home.php";
    }
}

require "../layout.php";
