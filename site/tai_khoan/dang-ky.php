<?php
require_once '../../global.php';
require_once '../../dao/customer.php';
extract($_REQUEST);
// var_dump($_REQUEST);
// // die;
// echo "<br>";

if (exist_params("btn_register")) {
    $email_exit = customer_check_email_exits($email);
    $email_exit2 = customer_check_email($email);
    
    if ($email_exit2 == true) {
        $MESSAGE = "Email  này đã được sử dụng!";
        $VIEW_NAME = 'dang-ki-form.php';
    } else {
        $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = $file_name ? $file_name : "user.png";
        try {
            $kich_hoat = '';
            $vai_tro = '';
            customer_insert($password, $name, $kich_hoat, $hinh, $email, $vai_tro);
            $MESSAGE = "Đăng ký thành viên thành công!";
            $VIEW_NAME = "tai_khoan/dang-nhap-form.php";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
            // $VIEW_NAME = "tai_khoan/dang-ky-form.php";
        }
    }
} else {
    global $id, $password, $name, $email, $hinh, $kich_hoat, $vai_tro, $password2;
}
// $VIEW_NAME = "tai_khoan/dang-ky-form.php";
require '../layout.php';