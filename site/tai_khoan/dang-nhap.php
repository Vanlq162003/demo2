<?php

require "../../global.php";
require "../../dao/customer.php";

extract($_REQUEST);

if (exist_params("btn_login")) {
    $user = customer_check_email($email);
    if ($user) {
        if ($user['password'] == $password) {
            $MESSAGE = "<script>alert('Đăng nhập thành công!')</script>";
            header("Location:$SITE_URL/trang_chinh/index.php");
            if (exist_params('ghi_nho')) {
                add_cookie('email', $email, 30);
                add_cookie('password', $password, 30);
            } else {
                delete_cookie('email');
                delete_cookie('password');
            }
            // ghi vào session để kiểm tra 
            $_SESSION["user"] = $user;
            // Xử lý ghi nhớ tài khoản
            // Quay trở lại trang được yêu cầu
            if (isset($_SESSION['request_uri'])) {
                header("location: " . $_SESSION['request_uri']);
            }
        } else {
            $MESSAGE = "Sai mật khẩu!";
        }
    } else {
        $MESSAGE = "Sai mã đăng nhập!";
    }
} 
// else if (isset($_SESSION['user'])) {
//     require 'dang-nhap-info.php';
//     $id = get_cookie("id");
//     $password = get_cookie("password");
// }
 else {
    if (exist_params("btn_logoff")) {
        session_unset();
        $VIEW_NAME="../trang_chinh/home.php";

    }
}

$VIEW_NAME = "tai_khoan/dang-nhap-form.php";
require '../layout.php';
