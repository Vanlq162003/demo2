<?php
require "../../global.php";
require_once "../check_admin.php";

require_once "../../dao/pdo.php";
require_once "../../dao/customer.php";
extract($_REQUEST);

if (exist_params("btn_list")) {
    $items = customer_selecAll();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_insert")) {
    // lấy dữ liệu từ form
    $password = $_POST["password"];
    $name = $_POST["name"];
    $kich_hoat = $_POST["kich_hoat"];
    // $avatar = $_FILES["avatar"];
    $email = $_POST["email"];
    $vai_tro = $_POST["vai_tro"];
    require "../../content/validate_server_add_user.php";
    if (!empty($emailerr) || !empty($passworderr) || !empty($nameerr) || !empty($avatarerr)) {
        $VIEW_NAME = "add.php";
        header("location:?emailerr=$emailerr&passworderr=$passworderr&nameerr=$nameerr&avatarerr=$avatarerr");
    }

    $file_name = save_file("avatar", "$IMAGE_DIR/users/");
    $forder_img = $file_name ? $file_name : "user.png";
    // insert db
    $email_exit = customer_check_email($email);
    if ($email_exit) {
        $MESSAGE = "Email đã tồn tại";
        $VIEW_NAME = "add.php";
    } else {
        // show dữ liệu
        $items = customer_selecAll();
        $VIEW_NAME = "list.php";

        customer_insert($password, $name, $kich_hoat, $forder_img, $email, $vai_tro);
    }
} else if (exist_params("btn_edit")) {
    // lấy dữ liệu từ form
    $id = $_REQUEST['id'];
    $customer_info = customer_select_by_id($id);
    extract($customer_info);


    // show dữ liệu
    $items = customer_selecAll();
    $VIEW_NAME = "edit.php";
} else if (exist_params("btn_delete")) {
    // lấy dữ liệu từ form
    $id = $_REQUEST['id'];

    customer_delete($id);


    // show dữ liệu
    $items = customer_selecAll();
    $VIEW_NAME = "list.php";
} else if (exist_params("btn_update")) {
    // lấy dữ liệu từ form

    $id = $_POST['id'];
    $name = $_POST["name"];
    $kich_hoat = $_POST["kich_hoat"];
    $file_upload = $_FILES["avatar_new"];
    if ($file_upload['size'] > 0) {
        $file_name = uniqid()  . basename($file_upload['name']);
        $target_path = "$IMAGE_DIR/users/" .  $file_name;

        move_uploaded_file($file_upload['tmp_name'], $target_path);
    } else {
        $file_name = $_POST['avatar_old'];
    }
    $vai_tro = $_POST["vai_tro"];

    customer_update_admin($id, $name, $kich_hoat, $file_name, $vai_tro);


    // show dữ liệu
    $items = customer_selecAll();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../index.php";
