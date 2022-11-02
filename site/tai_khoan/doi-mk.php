<?php
require '../../global.php';
require '../../dao/customer.php';
extract($_REQUEST);

// var_dump($_REQUEST);
// die;
if (exist_params("btn_change")) {
    if ($password2 != $password3) {
        $MESSAGE = "Xác nhận mật khẩu mới không đúng!";
    } else {
        $user = customer_select_by_id($id);
        // var_dump($user);
        if ($user) {
            if ($user['password'] == $password) {
                try {
                    customer_change_password($id, $password2);
                    $MESSAGE = "Đổi mật khẩu thành công!";
                   
                } catch (Exception $exc) {
                    $MESSAGE = "Đổi mật khẩu thất bại !";
                   
                }
            } else {
                $MESSAGE = "Sai mật khẩu!";
            }
        } else {
            $MESSAGE = "Sai mã đăng nhập!";
        }
    }
}
$VIEW_NAME = "tai_khoan/doi-mk-form.php";

require '../layout.php';
